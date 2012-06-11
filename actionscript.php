<?php
class Actionscript extends Witty_Controller {
	function __construct() {
		parent::__construct();
	}

	function index() {
		$this->load->model('witty_actionscript_flashgame');

		$flash_games = $this->witty_actionscript_flashgame->findAll();

		foreach($flash_games as $key => $value) {
			$data['flash_games'][$key] = $this->_load_flashgame_datas($value);
		}

		$this->_build('default', $data);
	}


	function play_flash($game_id = 0) {
		$this->load->model('witty_actionscript_flashgame');
		$this->load->model('witty_actionscript_hashcode');

		//L'utilisateur doit être connecté
		if(!$this->current_user) {
			redirect('actionscript','refresh');
		}

		//Le jeu flash doit exister dans la table qui référence les jeu en flash
		if (!$flashgame = $this->witty_actionscript_flashgame->findOneBy(array($this->witty_user->getColumnId() => $game_id))) {
			redirect('','refresh');
		}

		//On met à jour le hashcode à chaque refresh de la page
		$data['hashcode'] = $this->generate_flash_hashcode($this->current_user[$this->witty_user->getColumnId()]);
		
		$data['game_id'] = $flashgame[$this->witty_actionscript_flashgame->getColumnId()];
		$data['game_name'] = $flashgame[$this->witty_actionscript_flashgame->getColumnName()];
		$data['game_filename'] = $flashgame[$this->witty_actionscript_flashgame->getColumnFilename()];
		$data['game_file_width'] = $flashgame[$this->witty_actionscript_flashgame->getColumnFileWidth()];
		$data['game_file_height'] = $flashgame[$this->witty_actionscript_flashgame->getColumnFileHeight()];
		
		//Si il y avait déjà un hashcode présent pour le couple "jeu/utilisateur", alors on le met à jour avec le hash que l'on vient de calculer
		if($flash_hashcode = $this->witty_actionscript_hashcode->findOneBy(array($this->witty_actionscript_hashcode->getColumnGame() => $flashgame[$this->witty_actionscript_flashgame->getColumnId()], $this->witty_actionscript_hashcode->getColumnUser() => $this->current_user[$this->witty_user->getColumnId()]))) {
			$update_data = array();
			$update_data[$this->witty_actionscript_hashcode->getColumnHashcode()] = $data['hashcode'];
			
			$update_where = array();
			$update_where[$this->witty_actionscript_hashcode->getColumnId()] = $flash_hashcode[$this->witty_actionscript_hashcode->getColumnId()];
			
			$this->witty_actionscript_hashcode->update($update_data, $update_where);
			
		} else {
			//Sinon on insère un nouveau tuple dans la table
			$insert_data = array();
			
			$insert_data[$this->witty_actionscript_hashcode->getColumnGame()] = $flashgame[$this->witty_actionscript_flashgame->getColumnId()];
			$insert_data[$this->witty_actionscript_hashcode->getColumnHashcode()] = $data['hashcode'];
			$insert_data[$this->witty_actionscript_hashcode->getColumnUser()] = $this->current_user[$this->witty_user->getColumnId()];
			
			$this->witty_actionscript_hashcode->insert($insert_data);
		}
		
		$data['alone'] = true;

		$this->_build('flash_game', $data, 'frame');
	}


	function _load_flashgame_datas($flash_game){
		$this->load->model('witty_actionscript_flashgame');
		
		$data['id']	= $flash_game[$this->witty_actionscript_flashgame->getColumnId()];
		$data['name'] = $flash_game[$this->witty_actionscript_flashgame->getColumnName()];
		$data['width'] = $flash_game[$this->witty_actionscript_flashgame->getColumnFileWidth()];
		$data['height'] = $flash_game[$this->witty_actionscript_flashgame->getColumnFileHeight()];

		return $data;
	}


	//Fonctions servant au jeu FLASH - Non destinées aux utilisateurs webs
	
	//Génère un hashcode supposé unique : ce hashcode est nécessaire par couple "utilisateur/jeu"
	function generate_flash_hashcode($user_id) {
		$hashcode_result = md5(time() * $user_id);

		return $hashcode_result;
	}

	//Fonction qui sert au flash pour récupérer les meilleurs scores
	function getHighScore() {
		$this->load->model('witty_actionscript_score');

		//De préférence, le flash n'a PAS a savoir son "game_id" dans la table "actionscript_flashgame", on utilise donc le "hashcode" non pas pour récupérer le "user_id' mais juste pour récupérer le "game_id" car le hashcode est relié au 2
		if($hashcode = $this->witty_actionscript_hashcode->findOneBy(array($this->witty_actionscript_hashcode->getColumnHashcode => $this->input->post('hashcode')))) {
			$game_id = $hashcode[$this->witty_actionscript_hashcode->getColumnGame()];
		} else {
			//Déprécié - ici le flash connait son positionnement (id) dans la base de données (non recommandée car non flexible) - J'ai laissé cette possibilité en dernier recours mais elle n'est pas utilité dans mes jeux pour le moment
			$game_id = $this->input->post('game_id');
		}
		
		//Le flash, doit indiqué ses paramètres de recherches
		$first_result = $this->input->post('first_result');
		$max_result = $this->input->post('result_limit');

		//Par défaut on s'interdit d'envoyer plus que 20 résultat, même si le flash demande plus (pour la bande passante)
		if($max_result > 20) {
    		$max_result = 20;
    	}
    	
    	//Recherche des scores par ordre décroissant dans la table "actionscript_score" avec les paramètres de recherche
    	$scores = $this->witty_actionscript_score->findHighscoresByGame($game_id, $first_result, $max_result);
    	
    	//Affichage du score selon une syntaxe compréhensible par FLASH
    	echo 'result_length='.count($scores);
    	
    	echo '&result_score=';
    	for($i = 0; $i < count($scores) ; $i++) {
    		$temp_user = $this->witty_user->find($scores[$i][$this->witty_actionscript_score->getColumnUser()]);
    		echo '!'.$temp_user[$this->witty_user->getColumnLogin()];
    		echo '!'.$scores[$i][$this->witty_actionscript_score->getColumnScore()];
    		
    	}
	}


	//Fonctions permettant au FLASH d'envoyer un nouveau score de la part d'un utilisateur
	function send_flash_score() {
		$this->load->model('witty_actionscript_hashcode');
		$this->load->model('witty_actionscript_score');
		$this->load->model('witty_game');
		$this->load->model('witty_user');

		//Le FLASH envoie toujours non seulement le score en question, mais aussi le "hashcode" associé dans un formulaire POST
		if($hashcode = $this->witty_actionscript_hashcode->findOneBy(array($this->witty_actionscript_hashcode->getColumnHashcode => $this->input->post('hashcode')))) {
			$game = $this->witty_game->find($hashcode[$this->witty_actionscript_hashcode->getColumnGame()]);
			$user = $this->witty_user->find($hashcode[$this->witty_actionscript_hashcode->getColumnUser()]);

			$insert_data = array();
			$insert_data[$this->witty_actionscript_score->getColumnGame()] = $game[$this->witty_game->getColumnId()];
			$insert_data[$this->witty_actionscript_score->getColumnScore()] = $this->input->post('score');
			$insert_data[$this->witty_actionscript_score->getColumnUser()] = $user[$this->witty_user->getColumnId()];

			$this->witty_actionscript_score->insert($insert_data);

			//Retour au flash de l'état de l'insertion "success" ou "failed" selon une syntaxe particulière pour qu'il puisse comprendre
			echo 'var1=success';
		} else {
			echo 'var1=failed';
		}

	}
}

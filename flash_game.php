<html>
<body>

<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="<?php echo $game_file_width;?>" height="<?php echo $game_file_height;?>" title="<?php echo $game_name;?>">
<param name="movie" value="http://boutique.mywittygames.com/web_content/flash/<?php echo $game_id.'_'.$game_filename;?>.swf" />
<param name="quality" value="high" />
<param name="wmode" value="window" />
<param name="scale" value="showall" />
<param name="menu" value="false" />
<param name="flashvars" value="<?php echo ('hashcode='.$hashcode);?>" />
<embed src="http://www.mywittygames.com/web_content/flash/<?php echo $game_id.'_'.$game_filename;?>.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="<?php echo $game_file_width;?>" height="<?php echo $game_file_height;?>" flashvars="<?php echo ('hashcode='.$hashcode);?>"></embed>
</object>

</body>
</html>
<?php	
	session_start();

	$MUSICS_FILE = "data/musics.dat";
	
	include("library/common.lib.php");
	include("library/data.lib.php");
	include("library/music.lib.php");
	include("library/view.lib.php");
	
	include("session.php");
	
	$musicname = getParameter('musicname',"");

	$notes = '';
	if ( $musicname != "" ) {
		$music = findMusic($MUSICS,$musicname);
		$notes = createNotesHtml($music);	
	}
	
	print frameHtml($MUSICS,$musicname,$notes);
?>
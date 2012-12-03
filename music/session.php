<?php
	if (isset($_REQUEST['reset'])){ $reset = $_REQUEST['reset']; } else { $reset = 0; }
	if ($reset > 0){
		unset($_SESSION['INIT']);	
	}
	if (!isset($_SESSION['INIT'])){
		$_SESSION['INIT'] = true;
		$_SESSION['MUSICS'] = loadTabs($MUSICS_FILE);
	}
	$MUSICS = $_SESSION['MUSICS'];
?>

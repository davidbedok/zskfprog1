<?php
	if (isset($_REQUEST['reset'])){ $reset = $_REQUEST['reset']; } else { $reset = 0; }
	if ($reset > 0){
		unset($_SESSION['INIT']);	
	}
	if (!isset($_SESSION['INIT'])){
		$_SESSION['INIT'] = true;
		$_SESSION['MEMBERS'] = loadMembers($MEMBERS_FILE);
		$_SESSION['NETWORK'] = loadNetwork($NETWORK_FILE);
	}
	$MEMBERS = $_SESSION['MEMBERS'];
	$NETWORK = $_SESSION['NETWORK'];
?>

<?php
	session_start();
	
	print "start...<br/>";
	
	if (isset($_REQUEST['reset'])){ $reset = $_REQUEST['reset']; } else { $reset = 0; }
	if ($reset > 0){
		print "reset...<br/>";
		unset($_SESSION['INIT']);	
	}
	if (!isset($_SESSION['INIT'])){
		print "session is empty (or reset)...<br/>";
		$_SESSION['INIT'] = true;
		$_SESSION['DATA'] = array(1, 2, 3, 4, 5, 6);
	}
	print "variables...<br/>";
	$DATA = $_SESSION['DATA'];
	
	print_r($DATA);
	
	print "end...<br/>";
?>

<?php	
	session_start();

	$MEMBERS_FILE = "data/members.dat";
	$NETWORK_FILE = "data/network.dat";
	$PHONETYPES_FILE = "data/phonetypes.dat";
	$PHONES_FILE = "data/phones.dat";
	
	include("library/common.lib.php");
	include("library/data.lib.php");
	include("library/network.lib.php");
	include("library/view.lib.php");
	
	include("session.php");
	
	$member = getParameter('member',-1);

	$content = '';
	if ( $member == -1 ) {
		$content = membersHtml($MEMBERS);		
	} else {
		$memberunids = assortmentConnections($NETWORK,$member);
		$membernetwork = assortmentMembers($MEMBERS,$memberunids);
		$memberphones = assortmentPhones($PHONES,$member);
		$content = memberHtml(findMember($MEMBERS,$member),$membernetwork,$PHONETYPES,$memberphones);
	}
	
	print frameHtml($content);
?>
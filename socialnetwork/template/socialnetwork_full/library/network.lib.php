<?php

	function findMember ( $members, $unid ) {
		$user = null;
		$i = 0;
		while ( ( $i < count($members) ) && ( $members[$i]['unid'] != $unid ) ) {
			$i++;
		}
		if ( $i < count($members) ) {
			$user = $members[$i];
		}
		return $user;
	}
	
	function assortmentConnections ( $network, $memberunid ) {
		$unids = null;
		foreach ( $network as $connection ) {
			if ( $connection['left'] == $memberunid ) {
				$unids[] = $connection['right'];
			}
		}
		return $unids;
	}
	
	function assortmentMembers ( $members, $unids ) {
		$assortment = null;
		foreach ( $members as $member ) {
			if ( in_array($member['unid'],$unids) ) {
				$assortment[] = $member;
			}
		}
		return $assortment;
	}
	
?>

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
	
	function assortmentPhones ( $phones, $memberunid ) {
		$assortment = null;
		foreach ( $phones as $phone ) {
			if ( $phone['member_unid'] == $memberunid ) {
				$assortment[] = $phone;
			}
		}
		return $assortment;
	}
	
	function phoneType( $phonetypes, $phonetype_unid ) {
		$phoneTypeName = "n/a";
		$i = 0;
		while ( ( $i < count($phonetypes) ) && ( $phonetypes[$i]['unid'] != $phonetype_unid ) ) {
			$i++;
		}
		if ( $i < count($phonetypes) ) {
			$phoneTypeName = $phonetypes[$i]['name'];
		}
		return $phoneTypeName;	
	}
	
?>

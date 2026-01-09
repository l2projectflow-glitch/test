<?php

if(!$indexing) { exit; }

if($funct['servic'] != 1 || $service['actv']['basechange'] != 1) { fim($LANG[40003], 'ERROR', './'); }

if($logged != 1) { fim('Access denied!', 'RELOAD'); }

if($service['actv']['basechange'] != 1) { fim($LANG[40003]); }

$cid = !empty($_POST['cid']) ? intval(trim($_POST['cid'])) : '';
$custo = intval(trim($service['cost']['basechange']));
$sclass = !empty($_POST['sclass']) ? vCode($_POST['sclass']) : '';

if(empty($cid)) {
	fim($LANG[12058]);
}

$classes = array(88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,131,132,133,134);
if(!in_array($sclass, $classes)) {
	fim($LANG[39054]);
}

require('private/classes/classServices.php');

$char = Services::checkChar($_SESSION['acc'], $cid);
if(count($char) == 0) {
	fim($LANG[12100]);
}

if(($char[0]['login'] > $char[0]['logout'] || empty($char[0]['logout'])) && !empty($char[0]['login'])) {
	fim($LANG[12099]);
}

$classes_tree = array(88 => '88,2,1,0', 89 => '89,3,1,0', 90 => '90,5,4,0', 91 => '91,6,4,0', 93 => '93,8,7,0', 92 => '92,9,7,0', 94 => '94,12,11,10', 95 => '95,13,11,10', 96 => '96,14,11,10', 97 => '97,16,15,10', 98 => '98,17,15,10', 99 => '99,20,19,18', 100 => '100,21,19,18', 101 => '101,23,22,18', 102 => '102,24,22,18', 103 => '103,27,26,25', 104 => '104,28,26,25', 105 => '105,30,29,25', 106 => '106,33,32,31', 107 => '107,34,32,31', 108 => '108,36,35,31', 109 => '109,37,35,31', 110 => '110,40,39,38', 111 => '111,41,39,38', 112 => '112,43,42,38', 113 => '113,46,45,44', 114 => '114,48,47,44', 115 => '115,51,50,49', 116 => '116,52,50,49', 117 => '117,55,54,53', 118 => '118,57,56,53', 131 => '131,127,125,123', 132 => '132,128,125,123', 133 => '133,129,126,124', 134 => '134,130,126,124');

$hasClass = Services::checkHasClassInSub($cid, $classes_tree[$sclass]);
if(count($hasClass) > 0) {
	fim($LANG[39075]);
}

if($custo > 0) {
	if(debitBalance($_SESSION['acc'], $custo) != 'OK') {
		fim($LANG[10097]);
	}
}


if($sclass <= 98) { $race = '0'; } // Human
else if($sclass >= 99 && $sclass <= 105) { $race = '1'; } // Elf
else if($sclass >= 106 && $sclass <= 112) { $race = '2'; } // Dark Elf
else if($sclass >= 113 && $sclass <= 116) { $race = '3'; } // Orc
else if($sclass == 117 || $sclass == 118) { $race = '4'; } // Dwarf
else { $race = '5'; } // Kamael

$newLev = ($char[0]['Lev'] < 78 ? 78 : $char[0]['Lev']);
$newExp = ($char[0]['Exp'] < 1511275834 ? 1511275834 : $char[0]['Exp']);



require('../private/cacheD.php');

if(!is_resource(l2_cached_open())) {
	fim($LANG[12055].' #CacheD');
}

l2_cached_close();

$cached_op = pack("cVVVVVVV", 15, intval($cid), intval($char[0]['SP']), intval($newExp), intval($char[0]['align']), intval($char[0]['PK']), intval($char[0]['PKpardon']), intval($char[0]['Duel']));
$result = l2_cached_push(pack("s", strlen($cached_op)+2).$cached_op.ansi2unicode('site-atualstudio'));
if($result !== '1') {
	fim($LANG[12055]);
}

$cached_op = pack("cVVVVVVV", 16, intval($cid), intval($char[0]['gender']), intval($race), intval($sclass), 0, 0, 0);
$result = l2_cached_push(pack("s", strlen($cached_op)+2).$cached_op.ansi2unicode('site-atualstudio'));
if($result !== '1') {
	fim($LANG[12055]);
}

$cached_op = pack("cVVVVVVVV", 76, intval($cid), intval($char[0]['SP']), intval($newExp), intval($sclass), intval($char[0]['PK']), intval($char[0]['PKpardon']), intval($char[0]['Duel']), 0);
$result = l2_cached_push(pack("s", strlen($cached_op)+2).$cached_op.ansi2unicode('site-atualstudio'));
if($result !== '1') {
	fim($LANG[12055]);
}


$delete1 = Services::deleteSkills($cid);
$delete3 = Services::deleteHennas($cid);
$delete4 = Services::deleteShortcuts($cid);

if($addBaseSkills == 1) {
	$newSkills='';
	$skills = Services::listClassesSkills($classes_tree[$sclass]);
	if(count($skills) > 0) {
		
		for($i=0, $c=count($skills); $i < $c; $i++){
			$newSkills .= "('".$cid."', '".$skills[$i]['skill_id']."', '".$skills[$i]['level']."', '0', '0'), ";
		}
	
		$insert1 = Services::addSkills(substr($newSkills, 0, -2));
	}
} else {
	$insert1 = true;
}

$update1 = Services::updClassInOlympiad($sclass, $cid);
$update2 = Services::updBaseClass($sclass, $cid, $char[0]['Lev'], $char[0]['Exp'], $race);
$update3 = Services::moveAllPaperdoll($cid);

if(!$delete1) { fim($LANG[12055].' #1'); }
if(!$delete3) { fim($LANG[12055].' #3'); }
if(!$delete4) { fim($LANG[12055].' #4'); }
if(!$insert1) { fim($LANG[12055].' #5'); }
if(!$update1) { fim($LANG[12055].' #6'); }
if(!$update2) { fim($LANG[12055].' #7'); }
if(!$update3) { fim($LANG[12055].' #7'); }

if($delete1 && $delete3 && $delete4 && $insert1 && $update1 && $update2 && $update3) {
	@Services::logServices($_SESSION['acc'], $cid, 'changebaseclass', vCode('Alterou sua base class de ID '.$char[0]['subjob0_class'].' para ID '.$sclass), $custo);
	fim($LANG[12056], 'OK', './?module=services&page=list', $custo);
} else {
	fim($LANG[12055], 'ERROR', './?module=services&page=list');
}

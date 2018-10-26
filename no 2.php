<?php

	$phi=3.14;
	$r=10;
	$t=6;
	$luas;

	function myVol(){
		$GLOBALS['luas'] = 2 * $GLOBALS['phi'] * $GLOBALS['r'] * ($GLOBALS['r'] + $GLOBALS['t']);
	}

	myVol();
	printf("phi =  "); echo $phi;
	echo "<br>";
	printf("jari =  "); echo $r;
	echo "<br>";
	printf("tinggi =  "); echo $t;
	echo "<br>";
	printf("luas =  "); echo $luas;

?>
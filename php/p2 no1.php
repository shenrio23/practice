<?php

define("phi", "3.14");
function vB($dia = 5){
	$r = 1/2 * "$dia";
	$volume = 4/3 * phi * ("$r" * "$r" * "$r");
	printf ("%.2f", $volume);
	}
vB();
?>
<?php 
$x = [11,10,10,5,10,15,20,10,7,11];

echo foo($x,8,18,3,6);
echo foo($x,10,20,0,9);
echo foo($x,8,18,6,3);
echo foo($x,20,10,0,9);
echo foo($x,6,7,8,8);


function foo($x, $a, $b, $i, $j){
	$k = $j;
	$ct = 0;
	while ($k > $i-1) {
		if ($x[$k] <= $b AND $x[$k] != ($x[$k] <= $a)) {
			$ct = $ct+1;
		}
		$k = $k-1;
	}

	return $ct;
}

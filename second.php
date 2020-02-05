<?php 

echo h(1, "fruits");
echo h(2, "fruits");
echo h(5, "fruits");
echo h(pows(2, 1000000000000000), "fruits");
echo h(pows(2, 9831050005000007), "fruits");

function g($str){
	$i = 0;
	$new_str = '';
	while ($i <= strlen($str) - 1) {
		$new_str  = $new_str + $str[$i + 1];
		$i = $i + 1;
	}
	return $new_str;
}

function f($str){
	if (strlen($str) == 0) {
		return "";
	}
	else if(strlen($str) == 1){
		return $str;
	}
	else{
		return f(g($str)) + $str[0];
	}
}

function h($n, $str){
	while ($n != 1) {
		if ($n % 2 == 0) {
			$n = $n/2;
		}
		else{
			$n = 3*$n +1;
		}
		return $str;
	}
}

function pows($x, $y){
	if ($y == 0) {
		return 1;
	}
	else{
		return $x*pow($x, $y-1);
	}
}

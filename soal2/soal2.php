<?php

function is_username_valid($a){
	$lowercase = preg_match('@[a-z]@', $a);
	if (!$lowercase || strlen($a)!=8){
		echo "username tidak valid";
	}
	else {
		return true;
	}
		
}

function is_password_valid($b){
	$uppercase = preg_match('@[A-Z]@', $b);
	$lowercase = preg_match('@[a-z]@', $b);
	$number    = preg_match('/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $b);
	if (!$uppercase || !$lowercase || !$number ||strlen($b)>8){
		echo "password tidak valid";
	}
	else {
		return true;
	}
		
}

echo is_username_valid("zeronull");
echo is_password_valid("qazW_12");


?>

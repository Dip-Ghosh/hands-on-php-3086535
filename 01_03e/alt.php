<?php
//This cheats a little because we modified the flip function.
function flip() {
	return rand(0,1);
}

$flip = 0;

for( $i = 0; $i < 1000; $i++ ) {
	$flip += flip(); 
}

echo 'Heads was flipped ' . ($flip/1000)*100 . '% of the time.';<?php

function flip() {
	return ( 0 == rand(0,1) ) ? 'H' : 'T';
}

$H = 0;
$T = 0;

for ($i = 0; $i < 1000; $i++)
{
    $flip = flip();
    ${$flip}++;
}

echo "head was flipped " . $H/10 . " tails " .  $H/10;
?>


<style>
	.coin {
		background: #999999;
		color: #333333;
		border-radius: 50%;
		padding: 50px;
		text-align: center;
		font-size: 2rem;
		font-weight: bold;
		width: 50px;
	}
</style>

<?php

function flip() {
	return ( 0 == rand(0,1) ) ? 'H' : 'T';
}

$flip = [
'H' => 0,
'T' => 0
];

	$flip = [
		'H' => 0,
		'T' => 0
	];

	for ($i = 0; $i < 1000; $i++) {
		$flip[flip()]++;
	}



?>

<div class="coin">
	<?php 	echo "head was flipped " . $flip['H'] / 10 . " tails " .  $flip['T'] / 10;; ?>
</div>
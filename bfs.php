<?php
$adj = [
	'1' => ['6',],
	'2' => ['4','8',],
	'3' => ['5','6',],
	'4' => ['2','5','7',],
	'5' => ['3','4','7',],
	'6' => ['1','3',],
	'7' => ['4','5','8',],
	'8' => ['2','7',],
];

$discovered = [
	'1' => false,
	'2' => false,
	'3' => false,
	'4' => false,
	'5' => false,
	'6' => false,
	'7' => false,
	'8' => false,
];

$chosen = '5';
$l = [];
$l[] = [$chosen];
$discovered[$chosen] = true;
$i = 0;
$tree = [];

while (!empty($l[$i])) {
	$l[$i + 1] = [];

	foreach ($l[$i] as $u) {
		foreach ($adj[$u] as $e) {
			if ($discovered[$e] !== false) {
				continue;
			}
			$discovered[$e] = true;
			$tree[] = [$u, $e];
			$l[$i+1][] = $e;
		}
	}
	$i++;
}
print_r($tree);

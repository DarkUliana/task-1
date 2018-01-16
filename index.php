<?php

$array = ['55.100', '55.01', '50.001', '55.0010', '50.00', '55.010110'];
$pattern = '/(\d+)(\.[0-9]*[1-9]+)?(\.?0*$)/';
$replacement = '\1\2';

foreach ($array as $value) {

    echo $value.PHP_EOL;

}
foreach ($array as $value) {

	echo(preg_replace($pattern, $replacement, $value).PHP_EOL);

}

?>

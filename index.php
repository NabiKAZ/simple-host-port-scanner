<?php
/**
 * Simple multi hosts and ports scanner
 * 
 * @author       Nabi KaramAliZadeh
 * @website      www.Nabi.ir
 * @email        nabikaz@gmail.com
 * @package      simple-host-port-scanner
 * @version      1.0.0
 * @copyright    2023 Nabi K.A.Z. , All rights reserved.
 * @license      GNU General Public License v3.0
 */

$hosts = [
    '173.245.49.3',
    '216.239.38.120',
];
$ports = [
    80,
    443,
    22,
];
$timeout = 1;//sec

$oks = [];
foreach ($hosts as $host) {
    echo 'Host: ' . $host . PHP_EOL;
    foreach ($ports as $port) {
        $connection = @fsockopen($host, $port, $errno, $errstr, $timeout);
        echo '      ' . $host . ':' . $port . ' ... ';
        if (is_resource($connection)) {
             echo '*** OPEN ***' . PHP_EOL;
            $oks[] = $host . ':' . $port;
            fclose($connection);
        } else {
            echo 'CLOSED.' . PHP_EOL;
        }
    }
}

echo PHP_EOL . 'ALL OKs:' . PHP_EOL;
foreach ($oks as $ok) {
    echo $ok . PHP_EOL;
}
echo PHP_EOL;

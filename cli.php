<?php
// echo "Joao\n";

// echo $argc."\n";
// print_r($argv);

// $command = $argv[1] ?? '';

// switch($command){
//     case 'date':
//         echo date('d/m/Y H:i:s')."\n";
//         break;
//     default:
//         echo "comando invalido\n";
// }

$short = 'dt:';

$long = [
    'date',
    'texto:'
];

$options = getopt($short, $long);

#print_r($options);

$command = array_key_first($options);

switch($command){
    case 'd':
    case 'date':
        echo date('d/m/Y H:i:s')."\n";
        break;
    case 't':
    case 'texto':
        echo $options[$command]."\n";
        break;
    default:
        echo "comando invalido\n";
}
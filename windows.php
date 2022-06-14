<?php

echo "Hello world of PHP CLI! \n"; 

// $short = 'dt:s';

// $long = [
//     'date',
//     'texto:',
//     'system'
// ];

// $options = getopt($short, $long);

echo "Choose your side, GUI/CLI \n";
$username = readline("Digite seu nome: ");
readline_add_history($username);

echo "Seja bem-vindo ".$username."!\n";

$cmd = readline("Digite o comando desejado: ");
readline_add_history($cmd);

// $cmd = array_key_first($options);

    switch($cmd){
        case 'd':
        case 'date':
            echo date('d/m/Y H:i:s')."\n";
            break;
        case 't':
        case 'texto':
            echo $options[$cmd]."\n";
        break;
        case 'S':
        case 'system':
            $new = system('systeminfo 2>&1', $output);
            if($output == 0){
                $output = shell_exec('systeminfo');
                echo $output;
            }else{
                $sh = shell_exec('uname -a');
                echo $sh;
            }
        break;
        default:
            echo "comando invalido\n";
    }
?>
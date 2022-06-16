<?php
include_once('novo.php');

    $system = new System();

echo "Hello world of PHP CLI! \n"; 

echo 
"╔═══╦╗ ╔╦═══╗    ╔═══╦╗  ╔══╗
║╔═╗║║ ║║╔═╗║    ║╔═╗║║  ╚╣╠╝
║╚═╝║╚═╝║╚═╝║    ║║ ╚╣║   ║║
║╔══╣╔═╗║╔══╝╔══╗║║ ╔╣║ ╔╗║║
║║  ║║ ║║║   ╚══╝║╚═╝║╚═╝╠╣╠╗
╚╝  ╚╝ ╚╩╝       ╚═══╩═══╩══╝
" . "\n";
$username = readline("Username: ");
readline_add_history($username);

echo "Welcome a board ".$username."!\n";

$cmd = readline("Command ");
readline_add_history($cmd);

// $cmd = array_key_first($options);

    switch($cmd){
        case 'system --all':
            $system->getSysAll();
            break;

        case 'system':
            $system->getOS();
            break;
        
        case 'memory':
            #$system->getMem();
            break;
        case 'help':
        case '?':
            echo "Possible Commands: \n";
            $system->getHelp();
            break;
        default:
            echo "comando invalido\n";
    }

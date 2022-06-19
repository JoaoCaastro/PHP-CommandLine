<?php
include_once('Classes/Sistema.php');
include_once('Classes/input.php');


    $system = new Sistema();
    $input = new Input();
echo "Hello world of PHP CLI! \n"; 

echo "
╔═══╦╗ ╔╦═══╗    ╔═══╦╗  ╔══╗
║╔═╗║║ ║║╔═╗║    ║╔═╗║║  ╚╣╠╝
║╚═╝║╚═╝║╚═╝║    ║║ ╚╣║   ║║
║╔══╣╔═╗║╔══╝╔══╗║║ ╔╣║ ╔╗║║
║║  ║║ ║║║   ╚══╝║╚═╝║╚═╝╠╣╠╗
╚╝  ╚╝ ╚╩╝       ╚═══╩═══╩══╝
" . "\n";

$usuario = $input->setUsuario();
$email = $input->setEmail();
$senha = $input->setPass();

echo "Atenção!\n";

$cmd = readline("Comando: ");
readline_add_history($cmd);

while ($cmd != 'quit' || $cmd != 'exit'){

    switch($cmd){
        case 'show system --all':
            $system->getSysAll();
            $cmd = readline("Comando: ");
            readline_add_history($cmd);
            break;
        case 'show system':
            $system->getOS();
            $cmd = readline("Comando: ");
            readline_add_history($cmd);
            break;
        case 'show ip';
            $system->getIP();
            $cmd = readline("Comando: ");
            readline_add_history($cmd);
            break;
        case 'set ip';
            $system->setIP();
            $cmd = readline("Comando: ");
            readline_add_history($cmd);
            break;
        case 'help':
        case '?':
            echo "Possiveis Comandos: \n";
            $system->getHelp();
            $cmd = readline("Comando: ");
            readline_add_history($cmd);
            break;
        case 'quit':
        case 'exit':
            exit();
        default:
            echo "comando invalido!\n";
            $cmd = readline("Digite um comando valido: ");
            readline_add_history($cmd);
        }
}
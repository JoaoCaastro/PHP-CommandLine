<?php 
echo "Hello world of PHP CLI! \n"; 

echo "Choose your side, GUI/CLI \n";
$choose = readline("Type you choose:");
readline_add_history($choose);

    switch($choose){
        case 'CLI':
            echo "Welcome a board \n";
            break;
        case 'GUI':
            echo "See you later \n";
            break;
        default:
            echo "Escolha inválida \n";
    }
?>
<?php
require_once 'Classes/Pipeline.php';

$comm = new Pipeline;
$comm->getNome();
//$comm->trataAll();


// header("Refresh: 1");

// $explode = explode(" ", $_SERVER['HTTP_USER_AGENT']);

// print_r($explode);



// $sys = shell_exec('systeminfo');

// $sys = explode("\n", shell_exec('systeminfo'));

// #print_r($sys);

//     $convert = explode(':', $sys[1]);

// $trim = trim($convert[1]);

// $computador = new Computador;
// $computador->nome = $trim;
// $computador->os = $sys[2];
// $computador->fabricante = $sys[12];
// $computador->ram = $sys[26];
// $computador->ramUso = $sys[28];
// $computador->placaRede = $sys[48] . ' : ' . $sys[49];

#$convert = explode(':', $sys[1]);

#print $convert[1] . '<br/>';

// print $computador->getNome();
// print $computador->getOS();
// print $computador->getFabricante();
// print $computador->getRam();
// print $computador->getRamUso();
// print $computador->getPlacaRede();
?>
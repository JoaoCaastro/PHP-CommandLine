<?php

class PipelineClass
{
    
    public function getNome()
    {
        $sys = shell_exec('systeminfo');
        $sys = explode("\n", shell_exec('systeminfo'));
        $convert = explode(':', $sys[1]);
        $trim = trim($convert[1]);
        $computador = new Computador;
        $computador->nome = $trim;

        echo $trim;
    }

    public function trataMsg()
    {
        
    }

}
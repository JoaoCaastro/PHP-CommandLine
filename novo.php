<?php

class System{
    
    public $system;
    public $os;
    public $help = [];


    public function getSysAll()
    {
        echo php_uname();
        echo PHP_OS . "\n";

        if(strtoupper(substr(PHP_OS, 0, 3)) === 'WIN'){
            return $this->system = system('systeminfo');
        } else {
            return $this->system = system('uname -a && cat /etc/os-release && whoami && ip address | grep inet');
        }
    }

    public function getOS()
    {
        echo php_uname();
        echo PHP_OS . "\n";

        if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
            return $this->os = 'Seu sistema operacional é Windows!';
        } else {
            return $this->os = 'Seu sistema é UNIX!';
            echo php_uname();
        }
    }

    // public function getMem()
    // {
    //     $size = memory_get_usage();
    //     $units = array('b','kb','mb','gb');
    //     return @round($size/pow(1024,($i=floor(log($size,1024)))),2).' '.$units[$i];
    //     echo memory_get_usage(true));
    // }

    public function getHelp()
    {
        $this->help = [
            "system          Get OS",
            "system --all    Get all system informations",
            "date            Get date",
            "ip              Get IP address",
            "memory          Get memory used"
        ];

        foreach($this->help as $h){
            echo $h."\n";
        }
        #print_r(array_values($this->help));
    }

}
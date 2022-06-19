<?php

include_once 'Input.php';

class Sistema{

    public $system;
    public $os;
    public $ip;
    public $newip;
    public $help = [];

    public function getOS()
    {
        echo php_uname();
        echo PHP_OS . "\n";

        if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
            return $this->os = 'Windows';
        } else {
            return $this->os = 'Unix';
            echo php_uname();
        }
    }

    public function getSysAll()
    {
        echo php_uname();
        echo PHP_OS . "\n";

        if($this->os === 'Windows'){
            return $this->system = system('systeminfo');
            exit();
        } else {
            return $this->system = system('uname -a && cat /etc/os-release && whoami && ip address | grep inet');
            exit();
        }
    }

        public function getHelp()
    {
        $this->help = [
            "show system          Exibe OS",
            "show system --all    Exibe todas as informacoes sobre sistema",
            "show date            Exibe date e hora",
            "show ip              Exibe endereco IP",
            "set ip               Altera endereço IP"
        ];

        foreach($this->help as $h){
            echo $h."\n";
        }
    }

    public function getIP(){
        $this->ip = system('netsh interface ipv4 show config');
    }

    public function setIP(){

        $ipaddress = null;
        $netmask = null;
        $gateway = null;
    
    if($this->os = "Windows"){
        
            $name = "Ethernet";

            $ipaddress = readline("IP: ");
            readline_add_history($ipaddress);

            $netmask = readline("Mascara de rede: ");
            readline_add_history($netmask);

            $gateway = readline("Gateway: ");
            readline_add_history($gateway);

            $this->newip = system('netsh interface ipv4 set address name="'.$name.'" static '.$ipaddress.' '.$netmask.' '.$gateway);
            
        } else {

            $name = "enp0s3";

            $ipaddress = readline("IP: ");
            readline_add_history($ipaddress);

            $netmask = readline("Máscara de rede: ");
            readline_add_history($netmask);

            $this->newip = system('ifconfig '.$name.' '.$ipaddress.' netmask '.$netmask);
        }

    }

}
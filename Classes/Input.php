<?php

class Input{

    public $usuario;
    public $email;
    public $senha;


    public function setUsuario(){
        $usuario = readline("Nome do usuário: ");
        readline_add_history($usuario);
    }

    public function setEmail(){
        $email = readline("E-mail: ");
        readline_add_history($email);
    }

    public function setPass($prompt = "Digite sua senha:") {
        if (preg_match('/^win/i', PHP_OS)) {
        $vbscript = sys_get_temp_dir() . 'prompt_password.vbs';
        file_put_contents(
            $vbscript, 'wscript.echo(InputBox("'
            . addslashes($prompt)
            . '", "", "password here"))');
        $command = "cscript //nologo " . escapeshellarg($vbscript);
        $password = rtrim(shell_exec($command));
        unlink($vbscript);
        return $password;
        } else {
        $command = "/usr/bin/env bash -c 'echo OK'";
        if (rtrim(shell_exec($command)) !== 'OK') {
            trigger_error("Can't invoke bash");
            return;
        }
        $command = "/usr/bin/env bash -c 'read -s -p \""
            . addslashes($prompt)
            . "\" mypassword && echo \$mypassword'";
        $password = rtrim(shell_exec($command));
        echo "\n";
        return $password;
        }
    }
}
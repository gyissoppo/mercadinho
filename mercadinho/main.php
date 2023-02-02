<?php
    require_once('clienteCadastrado.php');

    $cadastroCliente = new ClienteCadastrado("irineu","1199999999","rua senador vergueiro, 400", "99999999999", "40", "R$ 14.506,18");

    
    public function __set($cadastroCliente, $dadosCliente){
        $this->$cadastroCliente = $dadosCliente;
    }

    public function __get($cadastroCliente){
        return $this->$cadastroCliente;
    }
    print_r($dadosCliente);
?>
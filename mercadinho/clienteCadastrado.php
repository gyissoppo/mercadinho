<?php
    class ClienteCadastrado{
        private string $nome;
        private string $telefone;
        private string $endereco;
        private string $CPF;
        private string $quantidadeCompras;
        private string $valorTotalGasto;

        //Método construtor
        public function __construct(
            string $nome, 
            string $telefone, 
            string $endereco, 
            string $CPF, 
            string $quantidadeCompras,
            string $valorTotalGasto)
        {
            $this->nome              = $nome;
            $this->telefone          = $telefone;
            $this->endereco          = $endereco;
            $this->CPF               = $CPF;
            $this->quantidadeCompras = $quantidadeCompras;
            $this->valorTotalGasto   = $valorTotalGasto;
        }//fim do construtor

        
    }
?>
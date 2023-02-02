<?php
    class Estoque{
        private string $produto;
        private string $quantidade;
        private string $valorUN;

        //Método construtor
        public function __construct(
            string $produto, 
            string $quantidade, 
            string $valorUN)
        {
            $this->produto    = $produto;
            $this->quantidade = $quantidade;
            $this->valorUN    = $valorUN;
        }//fim do construtor


    }
?>
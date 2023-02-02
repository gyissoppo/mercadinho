<?php
    class Funcionario{

        private string $codigoFuncuionario;
        private string $nomeFuncionario;
        private string $enderecoFuncionario;
        private string $telefoneFuncionario;
        private string $sexo;               
        private string $bairro;             
        private string $funcao;             
        private string $salario;          
        
        //Método construtor
        public function __construct( 
            string $codigoFuncuionario, 
            string $nomeFuncionario, 
            string $enderecoFuncionario, 
            string $telefoneFuncionario, 
            string $sexo, 
            string $bairro, 
            string $funcao,
            string $salario)
        {
            $this->codigoFuncuionario  = $codigoFuncuionario;
            $this->nomeFuncionario     = $nomeFuncionario;
            $this->enderecoFuncionario = $enderecoFuncionario;
            $this->telefoneFuncionario = $telefoneFuncionario;
            $this->sexo                = $sexo;
            $this->bairro              = $bairro;
            $this->funcao              = $funcao;
            $this->salario             = $salario;
        }//fim do construtor
    }
?>
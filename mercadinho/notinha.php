<?php
//$nomeCliente = 
//$CPF         = 
//$dataCompra  = 
//*produtos    
//*quantidades 
//*valoresUN   
//$valorTotal  = 

    class NotaFiscal{
        private string $nomeCliente;
        private string $CPF;
        private string $dataCompra;
        private string $valorTotal;

        //Método construtor
        public function __construct(
            string $nomeCliente, 
            string $CPF, 
            string $dataCompra, 
            string $valorTotal)
        {
            $this->nomeCliente = $nomeCliente;
            $this->CPF         = $CPF;
            $this->dataCompra  = $dataCompra;
            $this->valorTotal  = $valorTotal;
        }//fim do construtor
    }
?>
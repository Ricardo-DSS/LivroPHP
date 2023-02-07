<?php

    namespace Livros\Modelo;

    use Livros\Modelo;

    require_once("Cliente.php");
    class InfoCartao{
        private string $numeroCartao;
        private string $CVV;
        private string $mesVencimento;
        private string $anoVencimento;

        public function __construct(
            string $numeroCartao,
            string $CVV,
            string $mesVencimento,
            string $anoVencimento,
        ){
            $this->numeroCartao = $numeroCartao;
            $this->CVV = $CVV;
            $this->mesVencimento = $mesVencimento;
            $this->anoVencimento = $anoVencimento;
        }

        public function getNumeroCartao(): string{
            return $this->numeroCartao;
        }
        public function getCVV(): string{
            return $this->CVV;
        }
        public function getMesVencimento(): string{
            return $this->mesVencimento;
        }
        public function getAnoNascimento(): string{
            return $this->anoVencimento;
        }

        public function setNumeroCartao($numeroCartao):void{
            $this->numeroCartao = $numeroCartao;
        }
        public function setCVV($CVV):void{
            $this->CVV = $CVV;
        }
        public function setMesNascimento($mesNascimento):void{
            $this->mesNascimento = $mesNascimento;
        }
        public function setAnoVencimento($anoVencimento):void{
            $this->AnoVencimento = $anoVencimento;
        }
    }
?>
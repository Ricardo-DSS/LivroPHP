<?php
    namespace Livros\Modelo;

    use Livros\Modelo;

    class Endereco{
        private string $logradouro;
        private string $numero;
        private string $bairro;
        private string $cidade;

        public function __construct(
            string $logradouro,
            string $numero,
            string $bairro,
            string $cidade
        ){
            $this->logradouro = $logradouro;
            $this->numero = $numero;
            $this->bairro = $bairro;
            $this->cidade = $cidade;
        }

        public function getLogradouro(): string{
            return $this->logradouro;
        }
        public function getNumero(): string{
            return $this->numero;
        }
        public function getBairro(): string{
            return $this->bairro;
        }
        public function getCidade(): string{
            return $this->cidade;
        }

        public function setLogradouro(string $logradouro): void{
            $this->logradouro = $logradouro;
        }
        public function setNumero(string $numero): void{
            $this->numero = $numero;
        }
        public function setBairro(string $bairro): void{
            $this->bairro = $bairro;
        }
        public function setCidade(string $cidade): void{
            $this->cidade = $cidade;
        }
    }
?>
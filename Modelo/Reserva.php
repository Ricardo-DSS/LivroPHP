<?php

    namespace Livros\Modelo;

    use Livros\Modelo;

    use Livros\Modelo\Livro;
    
    require_once("Livro.php");
    class Reserva extends Livro{ 
        private int $quantidadeReservada = 0;

        public function __construct(string $ISBN, string $nomeLivro, string $autor, float $preco, int $quantidade, int $quantidadeReservada){
            parent::__construct($ISBN, $nomeLivro, $autor, $preco, $quantidade);
            $this->quantidadeReservada = $quantidadeReservada;
        }

        public function getName(){
            return $this->getNomeLivro();
        }
        public function getQuantidadeReservada(): int{
            return $this->quantidadeReservada;
        }
        
        public function setQuantidadeReservada($quantidadeReservada){
            $this->quantidadeReservada = $quantidadeReservada;
        }
    }
?>
<?php
    namespace Livros\Modelo;

    use Livros\Modelo;

    class Livro{
        private string $ISBN;
        private string $nomeLivro;
        private string $autor;
        private float $preco;
        private int $quantidade;
        
        public function __construct(string $ISBN, string $nomeLivro, string $autor, float $preco, int $quantidade){
            $this->ISBN = $ISBN;
            $this->nomeLivro = $nomeLivro;
            $this->autor = $autor;
            $this->preco = $preco;
            $this->quantidade = $quantidade;
        }
        
        public function getISBN(): string{
            return $this->ISBN;
        }
        public function getNomeLivro(): string{
            return $this->nomeLivro;
        }
        public function getPreco(): float{
            return $this->preco;
        }
        public function getAutor(): string{
            return $this->autor;
        }
        public function getQuantidade(): int{
            return $this->quantidade;
        }

        public function setISBN(string $ISBN): void{
            $this->ISBN = $ISBN;
        }
        public function setNomeLivro(string $nomeLivro): void{
            $this->nomeLivro = $nomeLivro;
        }
        public function setPreco(string $preco): void{
            $this->preco = $preco;
        }
        public function setAutor(string $autor): void{
            $this->autor = $autor;
        }
        public function setQuantidade(int $quantidade): void{
            $this->quantidade = $quantidade;
        }
    }
?>
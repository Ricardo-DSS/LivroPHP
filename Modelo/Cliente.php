<?php
    namespace Livros\Modelo;

    use Livros\Modelo;


    require_once("Endereco.php");
    require_once("InfoCartao.php");


    class Cliente{
        private string $nome;
        private Endereco $endereco;
        private string $telefone;
        private string $dataNascimento;
        private string $login;
        private string $senha;

        public function __construct(
            string $nome,
            Endereco $endereco,
            string $telefone,
            string $dataNascimento,
            string $login,
            string $senha,
        ){
            $this->nome = $nome;
            $this->endereco = $endereco;
            $this->telefone = $telefone;
            $this->dataNascimento = $dataNascimento;
            $this->login = $login;
            $this->senha = $senha;
        }

        public function getNome(): string{
            return $this->nome;
        }
        public function getTelefone(): string{
            return $this->telefone;
        }
        public function getDataNascimento(): string{
            return $this->dataNascimento;
        }
        public function getLogin(): string{
            return $this->login;
        }
        public function getSenha(): string{
            return $this->senha;
        }

        public function setNome(string $nome): void{
            $this->nome = $nome;
        }
        public function setTelefone(string $Telefone): void{
            $this->telefone = $telefone;
        }
        public function setDataNascimento(string $dataNascimento): void{
            $this->dataNascimento = $dataNascimento;
        }
        public function setLogin(string $login): void{
            $this->login = $login;
        }
        public function setSenha(string $senha): void{
            $this->senha = $senha;
        }
    }//fim da classe Cliente
?>
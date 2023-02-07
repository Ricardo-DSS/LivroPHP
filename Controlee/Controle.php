<?php

    namespace Livros\Controlee;

    use Livros\Controlee;
    use Livros\Modelo\Cliente;
    use Livros\Modelo\Livro;
    use Livros\Modelo\InfoCartao;
    use Livros\Modelo\Reserva;

    class Controle{

        public function cadastrar(Cliente $client): string{
            $newUser = $client;
            return "Cadastro realizado ".$newUser->getNome();
        }

        public function entrar(string $login, string $senha, Cliente $client): string{
            if($login == $client->getLogin() and $senha == $client->getSenha()){
                return "Bem-vindo! ".$client->getNome();
            }
            return "Usuário ou senha Incorretos!";
        }

        public function comprar(Cliente $client, InfoCartao $cartao, Livro $livr, int $quantidade): string{
            if($livr->getQuantidade() >= $quantidade){
                $livr->setQuantidade($livr->getQuantidade() - $quantidade);
                $ultimoDigito = substr($cartao->getNumeroCartao(), -4, 4);
                return "Olá Sr(a) ".$client->getNome()." O livro ".$livr->getNomeLivro()." Está disponível. Já processamos as informações do seu cartão final: ".$ultimoDigito;
            }
            return "Não temos o livro desejado em estoque";
        }

        public function reservarLivro(Reserva $reserv, int $quantidade): string {
            $reserv->setQuantidadeReservada($reserv->getQuantidadeReservada() + $quantidade);
            return "O livro: ".$reserv->getName()." Foi reservado!";
        }
    }
?>
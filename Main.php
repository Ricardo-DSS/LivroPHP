<?php
    require_once("Modelo/Cliente.php");
    require_once("Modelo/Endereco.php");
    require_once("Modelo/InfoCartao.php");
    require_once("Modelo/Livro.php");
    require_once("Modelo/Reserva.php");
    require_once("Controlee/Controle.php");
    require_once("DAO/Conexao.php");
    require_once("DAO/Inserir.php");
    require_once("DAO/Atualizar.php");
    require_once("DAO/Consultar.php");
    require_once("DAO/Excluir.php");

    use Livros\Controlee\Controle;
    use Livros\Modelo\Endereco;
    use Livros\Modelo\InfoCartao;
    use Livros\Modelo\Cliente;
    use Livros\Modelo\Livro;
    use Livros\Modelo\Reserva;
    use Livros\DAO\Conexao;
    use Livros\DAO\Atualizar;
    use Livros\DAO\Inserir;
    use Livros\DAO\Consultar;
    use Livros\DAO\Excluir;

    $control = new Controle();

    $enderecRicardo = new Endereco("Senador Vergueiro", "1340", "Jardim Alvorada", "São Bernardo do Itaquera");
    $cartaoRicardo = new InfoCartao("1234.4567.7894.7894", "123", "06", "2025");
    $clientRicardo = new Cliente("Ricardo", $enderecRicardo, "97070-7070", "02/06/2000", "Vinicius.s", "1234");
    $livro1 = new Livro("159448385X", "Peregrino", "Khaled Russeu", 49.90, 10);
    $livro2 = new Livro("0446310786", "To Kill a Mockingbird", "Harper Lee", 19.90, 20);
    $reserva = new Reserva("159448385X", "The Ghosthn Goblins", "SUper Romeu", 49.90, 10, 1);
    $quantidade = 1;

    /*
    echo "<br>".$control->cadastrar($clientRicardo)."<br>";
    echo "<br>".$control->entrar("Ricardo.s", "1234", $clientRicardo)."<br>";
    echo "<br>".$control->comprar($clientRicardo, $cartaoRicardo, $livro1, 2)."<br>";
    echo "<br>".$livro1->getQuantidade()."<br>";
    echo "<br>".$control->reservarLivro($reserva, $quantidade)."<br>";
    echo "<br>".$reserva->getQuantidadeReservada()."<br>";
    */

    $conex = new Conexao();
    $conex->conectar();

    $insert = new Inserir();
    $consult = new Consultar();

    //echo $insert->cadastrarCliente($conex, $clientRicardo, $enderecRicardo); 
    //echo $consult->verificarIdentidade($conex, 'Ricardo', '1234');
    //$insert->cadastrarLivro($conex, $livro1);
    //$consult->consultarLivro($conex, 'Peregrino', 1);

    $consult->reserva($conex, 'Peregrino', 10);
?>
<?php
    namespace Livros\DAO;

    require_once("Conexao.php");

    use Livros\DAO\Conexao;

    class Atualizar{
        public function atualizarLivro(Conexao $conexao, string $novoDado, string $nomeLivro){
            try{
                $conn = $conexao->conectar();
                $sql = "update Catalogo set quantidade = '$novoDado' where nomeLivro = '$nomeLivro'";
                $result = mysqli_query($conn, $sql);

                mysqli_close($conn);
            } catch (Exception $erro){
                echo $erro;
            }
        }
    }
?>
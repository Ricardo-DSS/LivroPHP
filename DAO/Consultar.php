<?php
    namespace Livros\DAO;

    require_once("Conexao.php");
    require_once("Atualizar.php");

    use Livros\DAO\Conexao;
    use Livros\DAO\Atualizar;

    class Consultar{
        public function verificarIdentidade(Conexao $conexao, string $login, string $senha){
            try{
                $conn = $conexao->conectar();
                $sql = "select * from Cliente where login = '$login' and senha = '$senha'";
                $result = mysqli_query($conn, $sql);

                $dados = mysqli_fetch_Array($result);

                if(empty($dados) == 0){
                    if($dados["login"] == $login and $dados["senha"] == $senha){
                        echo "Bem-vindo!";
                        return;
                    }
                } else {
                    echo "Usuário não registrado!";
                }
            } catch (Except $erro){
                echo $erro;
            }      
        }

        public function consultarLivro(Conexao $conexao, string $nome, int $quantidade){
            try{
                $atuali = new Atualizar();
                
                $conn = $conexao->conectar();
                $sql = "select * from Catalogo where nomeLivro = '$nome'"; 
                $result = mysqli_query($conn, $sql);

                $dados = mysqli_fetch_Array($result);

                if($dados["quantidade"] >= $quantidade){
                    $novaQuantidade = $dados["quantidade"] - $quantidade;
                    $atuali->atualizarLivro($conexao, $novaQuantidade, $nome);
                    echo "Livro Comprado!";
                } else {
                    echo "No momento não temos o item selecionado!";
                }

            } catch (Exception $erro) {
                echo $erro;
            }
        }

        public function reserva(Conexao $conexao, string $nome, int $reservado){
            try{
                $conn = $conexao->conectar();
                $sql = "select * from Catalogo where nomeLivro = '$nome'";
                $result = mysqli_query($conn, $sql);

                $dados = mysqli_fetch_Array($result);

                if($dados["quantidadeReserva"] == null){
                    mysqli_query($conn, "update Catalogo set quantidadeReserva = 0");
                    $novaQuantidade = $dados["quantidadeReserva"] + $reservado;
                    mysqli_query($conn, "update Catalogo set quantidadeReserva = '$novaQuantidade'");
                    echo "Livro Reservado!";
                } else {
                    $novaQuantidade = $dados["quantidadeReserva"] + $reservado;
                    mysqli_query($conn, "update Catalogo set quantidadeReserva = '$novaQuantidade'");
                    echo "Livro Reservado!";
                }
            } catch (Exception $erro){
                echo $erro;
            }
        }
    }
?>
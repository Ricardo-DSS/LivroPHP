<?php
    namespace Livros\DAO;

    require_once("Conexao.php");

    use Livros\DAO\Conexao;
    use Livros\Modelo\Cliente;
    use Livros\Modelo\Endereco;
    use Livros\Modelo\Livro;

    class Inserir{
        public function cadastrarCliente(Conexao $conexao, Cliente $cliente, Endereco $endereco){
            try{
                $nome = $cliente->getNome();
                $telefone = $cliente->getTelefone();
                $dataNascimento = $cliente->getDataNascimento();
                $login = $cliente->getLogin();
                $senha = $cliente->getSenha();

                $logradouro = $endereco->getLogradouro();
                $numero = $endereco->getNumero();
                $bairro = $endereco->getBairro();
                $cidade = $endereco->getCidade();

                $conn = $conexao->conectar();//abre a conexao
                $sql1 = "insert into Cliente (codigo, nome, telefone, dataNascimento, login, senha) 
                values ('', '$nome', '$telefone', '$dataNascimento', '$login', '$senha')";//declara o comando
                $sql2 = "insert into Endereco (codigo, logradouro, numero, bairro, cidade) values ('', '$logradouro', '$numero', '$bairro', '$cidade')";

                $result1 = mysqli_query($conn,$sql1);//executa o comando no banco
                $result2 = mysqli_query($conn,$sql2);

                if($result1 and $result2){
                    return "<br><br>Inserido com sucesso!";
                }
                return "<br><br>Não inserido";

                mysqli_close($conn);//Encerra a conexao

            } catch(Except $erro){
                echo $erro;
            }
        }

        public function cadastrarLivro(Conexao $conexao, Livro $livro){
            try{
                $ISBN = $livro->getISBN();
                $nomeLivro = $livro->getNomeLivro();
                $autor = $livro->getAutor();
                $preco = $livro->getPreco();
                $quantidade = $livro->getQuantidade();

                $conn = $conexao->conectar();
                $sql = "insert into Catalogo (codigo, isbn, nomeLivro, autor, preco, quantidade) 
                values ('', '$ISBN', '$nomeLivro', '$autor', '$preco', '$quantidade')";
                $result = mysqli_query($conn, $sql);

                if($result){
                    return "Livro cadastrado!";
                }
                return "<br>Não Inserido!";

                mysqli_close($conn);
            } catch (Except $erro){
                echo $erro;
            }
        }
    }//fim da classe
?>
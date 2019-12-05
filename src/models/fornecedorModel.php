<?php

require_once realpath(dirname(__FILE__,2).'/config/config.php');

    class CategoriaModel{
        public static function ListarTodos(){
            $conexao =  Database:: getConection();

            $sql = "SELECT * FROM fornecedor"; // forma menos protegido
            $resultadoQuery = $conexao->query($sql) or die ("Erro ao listar todas as categorias.").mysql_error();

                if ($resultadoQuery){
                    return $resultadoQuery;
                }else{
                    return false;
                }

            //var_dump($resultadoQuery);
            //var_dump($conexao);
        }

        public function incluirCategoria($dados){
           //var_dump($dados);
            $conexao =  Database:: getConection();

            $dadosDoBanco = $dados['razaoSocial'];
            $dadosDoBanco = $dados['nomeFantasia'];
            $dadosDoBanco = $dados['cnpj'];
            $dadosDoBanco = $dados['incricaoEstadual'];
            //endereco====
            $dadosDoBanco = $dados['#cep'];
            $dadosDoBanco = $dados['#logradouro'];
            $dadosDoBanco = $dados['#numero'];
            $dadosDoBanco = $dados['#bairro'];
            $dadosDoBanco = $dados['#cidade'];
            $dadosDoBanco = $dados['#uf'];
            $dadosDoBanco = $dados['celular'];
            $dadosDoBanco = $dados['telefoneFixo'];
            $dadosDoBanco = $dados['#ibge'];
           // $dadosDoBanco = $dados['inscricaoEstadual'];
            $comandoSQL = $conexao->prepare("INSERT INTO fornecedor (razao_social) VALUES (?)");
            $comandoSQL = $conexao->prepare("INSERT INTO fornecedor (nome_fantasia) VALUES (?)");
            $comandoSQL = $conexao->prepare("INSERT INTO fornecedor (cnpj) VALUES (?)");// para cada interroção é um campo do meu banco de dados
            $comandoSQL = $conexao->prepare("INSERT INTO fornecedor (inscricao_estadual) VALUES (?)");
            //----------
            $comandoSQL = $conexao->prepare("INSERT INTO endereco (cep) VALUES (?)");
            $comandoSQL = $conexao->prepare("INSERT INTO endereco (logradouro) VALUES (?)");
            $comandoSQL = $conexao->prepare("INSERT INTO endereco (numero_endereco) VALUES (?)");
            $comandoSQL = $conexao->prepare("INSERT INTO endereco (bairro) VALUES (?)");
            $comandoSQL = $conexao->prepare("INSERT INTO endereco (cidade) VALUES (?)");
            $comandoSQL = $conexao->prepare("INSERT INTO endereco (uf) VALUES (?)");
            $comandoSQL = $conexao->prepare("INSERT INTO endereco (ibge) VALUES (?)");




            // $comandoSQL = $conexao->prepare("INSERT INTO fornecedor (inscricao_estadual) VALUES (?)");


            //Mescla o valor da variavel la no comando SQL Prepare onde você colocou a '?'
            $comandoSQL->bind_param('s',$dadosDoBanco);// forma mais segura de fazer S= string, I= integer ...
            $comandoSQL->bind_param('s',$dadosDoBanco);
            $comandoSQL->bind_param('s',$dadosDoBanco);
            $comandoSQL->bind_param('s',$dadosDoBanco);

            //-------
            $comandoSQL->bind_param('s',$dadosDoBanco);
            $comandoSQL->bind_param('s',$dadosDoBanco);
            $comandoSQL->bind_param('s',$dadosDoBanco);
            $comandoSQL->bind_param('s',$dadosDoBanco);
            $comandoSQL->bind_param('s',$dadosDoBanco);
            $comandoSQL->bind_param('s',$dadosDoBanco);
            $comandoSQL->bind_param('s',$dadosDoBanco);
            //Grava no banco
            $comandoSQL->execute();
            if($comandoSQL->affected_rows > 0){
                $id = mysqli_stmt_insert_id($comandoSQL);
                return $id;
            }else{
                return "Erro ao gravar no banco de dados";
            }
        }
        public function incluirCategoriaUpdate($dados){
            // var_dump($dados);
             $conexao =  Database:: getConection();
    
             $dadosDoBanco = $dados['razaoSocial'];
             $dadosDoBanco = $dados['nomeFantasia'];
             $dadosDoBanco = $dados['inscricaoEstadual'];
             $dadosDoBanco = $dados['radio1'];
             $comandoSQL = $conexao->prepare("UPDATE fornecedor SET (razao_social) = WHERE (?) ");// para cada interroção é um campo do meu banco de dados
             $comandoSQL = $conexao->prepare("UPDATE fornecedor SET (nome_fantasia) = WHERE (?) ");
             $comandoSQL = $conexao->prepare("UPDATE fornecedor SET (inscricao_estadual) = WHERE (?) ");
             $comandoSQL = $conexao->prepare("UPDATE fornecedor SET (cnpj) = WHERE (?) ");
             
             //Mescla o valor da variavel la no comando SQL Prepare onde você colocou a '?'
             $comandoSQL->bind_param('s',$dadosDoBanco);// forma mais segura de fazer S= string, I= integer ...
    
             //Grava no banco
             $comandoSQL->execute();
             if($comandoSQL->affected_rows > 0){
                 $id = mysqli_stmt_insert_id($comandoSQL);
                 return $id;
             }else{
                 return "Erro ao gravar no banco de dados";
             }
         }
    }

    //Nas classes de model você cria esse IF que servirá como hub direcionando
    //um post ou get para uma determinada function
    if($_SERVER['REQUEST_METHOD'] == 'POST'){ // aqui é onde vai deccorer a chamada se houver um *request* POST
        $fornecedor = new CategoriaModel;

        $acao = isset($_POST['acao']);
        //var_dump($_POST);

        if($acao == "insert"){
          $fornecedor->incluirCategoria($_POST);  
        }else{
           $fornecedor->incluirCategoriaUpdate($_POST);
        }
    }
?>
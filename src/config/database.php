<?php
    //Classe abstrata de ações no banco de dados

    //print_r(realpath(dirname(__FILE__,2).'/env_dev.ini' ));
    //print_r(parse_ini_file(realpath(dirname(__FILE__,2).'/env_dev.ini' )));
    class Database{

        public function _construct(){
            getConection();
        }
        
        public static function getConection(){
            //Primeiro. pego o caminho de configuração Env
            $pathEnv = realpath(dirname(__FILE__,2).'/env_dev.ini' );

            //Segundo, pegar as chaves do arquivo de configuração 
            $env = parse_ini_file($pathEnv);

            $conexao = new mysqli($env['host'], $env['username'], $env['password'], $env['database']);
            $conexao->set_charset("utf8");

            if($conexao->connect_error){
                die("Erro: ".$conexao->connect_error);
            }
            return $conexao;
        }
    }

?>
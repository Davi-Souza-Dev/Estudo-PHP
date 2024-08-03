<?php 

//DEFININDO OS NAMESPACES
namespace App\Model;

class Conexao{
    // ADICIONA UM ATRIBUTO PARA RECEBER A INSTANCIA DA CONEXÃO
    private static $instace;

    //FUNÇÃO PARA CIRAR INSTANCI DIRETO NA CLASSE
    public static function getCom(){
        //VERIFICA SE nÃO EXISTE UMA INSTANCIA CRIADA
        if(!isset(self::$instace)){
            //CRIA UMA INSTANCIA PARA CONEXÃO DO BANCO DE DADOS VIA PDO
            self::$instace = new \PDO('mysql:host=localhost;dbname=pdo;charset=utf8','root','');
        }

        return self::$instace;
    }
}

?>
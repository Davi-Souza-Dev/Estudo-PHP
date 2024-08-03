<?php 
    //CRIANDO UMA FUNÇÃo STATIC
    class LoginClass{
        public static $user;

        public  static function setUser($u){
            //ACESSADO O ATRIBUTO STATIC
            self::$user = $u;
        }

        //FUNCçÂO STATIC
        public static function logar(){
            echo self::$user . " Logou! <hr>";
        }

        public function novoLogin(){
            echo "Realizando novo login... <hr>";
        }
    }

    //E POSSIVEL INSTACIAR CLASSES MESMO ESTANDO STATIC
    class newLogin extends LoginClass{}

    //ACESSANDO A FUNçÂO STATIC 
    LoginClass::setUser("Admin");
    LoginClass::logar();


    //INSTANCIANDO NOVA CLASSE 
    $newLogin = new LoginClass();
    $newLogin->novoLogin();
?>
<?php
/**
 * Created by PhpStorm.
 * User: Виктор Сидоренко
 */
class Config{
    static private $isntance = null;
    public $login;
    public $password;
    private function __construct(){}
    private function __clone(){}
    public static function getInstance(){
        if(empty(self::$isntance)){
            self::$isntance = new self();
        }
        return self::$isntance;
    }
    public function setLogin($login){
        $this->login = $login;
    }
    public function setPassword($password){
        $this->password = $password;
    }
}
class Logon{
    private $config;
    private $user_login;
    private $user_password;
    function __construct($user_login, $user_password){
        $this->config = Config::getInstance();
        $this->user_login = $user_login;
        $this->user_password = $user_password;
    }
    function validate(){
        if(($this->config->login == $this->user_login) && ($this->config->password == $this->user_password)){
            echo "User <br>";
        } else {
            echo "Hacker <br>";
        }
    }
}

$config = Config::getInstance();
$config->setLogin('root');
$config->setPassword('pass');

$user1 = new Logon('root', 'pass');
$user1->validate();

$user2 = new Logon('root', '1234');
$user2->validate();







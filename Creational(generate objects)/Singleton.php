<?php
/*
Шаблоны Singleton - это шаг вперед по сравнению с использованием глобальных
 переменных в объектно-ориентированном контексте. Вы не сможете затереть
объекты Singleton неправильными данными. Такой вид защиты особенно важен в
версиях РНР, в которых нет поддержки пространства имен. Любой конфликт имен
будет обнаружен на стадии компиляции, что приведет к завершению выполнения
программы.
Используется для создания всего одного экземпляра класса и гарантирует,
 что во время работы программы не появиться второй. Например, в схеме MVC, зачастую этот
паттерн используется для порождения главного (фронтового) контроллера.
*/
class Preferences {
    private $props = array();
    private static $instance;

    private function __construct() { }

    public static function getInstance() {
        if ( empty( self::$instance ) ) {
            self::$instance = new Preferences();
        }
        return self::$instance;
    }

    public function setProperty( $key, $val ) {
        $this->props[$key] = $val;
    }

    public function getProperty( $key ) {
        return $this->props[$key];
    }
}


$pref = Preferences::getInstance();
$pref->setProperty( "name", "matt" );

unset( $pref ); // remove the reference

$pref2 = Preferences::getInstance();
print $pref2->getProperty( "name" ) ."\n"; // demonstrate value is not lost
?>

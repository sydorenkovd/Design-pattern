<?php
/*
Определяет интерфейс более высокого уровня, который упрощает использование подсистем.
Представляет собой унифицированный интерфейс вместо набора интерфейсов
некоторой подсистемы
В основе шаблона  Facade  на самом деле лежит очень простая идея. Это всего
лишь вопрос создания одной точки входа для уровня или подсистемы в целом. В
результате мы получаем ряд преимуществ, поскольку отдельные части проекта отделяются 
одна от другой. Программистам клиентского кода полезно и удобно иметь
доступ к простым методам, которые выполняют понятные и очевидные вещи. Это
позволяет сократить количество ошибок, сосредоточив обращение к подсистеме в
одном месте, так что изменения в этой подсистеме вызовут сбой в предсказуемом
месте. Классы  Facade  также минимизируют ошибки в комплексных подсистемах,
где клиентский код, в противном случае, мог бы некорректно использовать внутренние функции.
*/
function getProductFileLines( $file ) {
    return file( $file );
}

function getProductObjectFromId( $id, $productname ) {
    // some kind of database lookup
    return new Product( $id, $productname );
}

function getNameFromLine( $line ) {
    if ( preg_match( "/.*-(.*)\s\d+/", $line, $array ) ) {
        return str_replace( '_',' ', $array[1] );
    }
    return '';
}

function getIDFromLine( $line ) {
    if ( preg_match( "/^(\d{1,3})-/", $line, $array ) ) {
        return $array[1];
    }
    return -1;
}

class Product {
    public $id;
    public $name;
    function __construct( $id, $name ) {
        $this->id = $id;
        $this->name = $name;
    }
}

class ProductFacade {
    private $products = array();

    function __construct( $file ) {
        $this->file = $file;
        $this->compile();
    }

    private function compile() {
        $lines = getProductFileLines( $this->file );
        foreach ( $lines as $line ) {
            $id = getIDFromLine( $line );
            $name = getNameFromLine( $line );
            $this->products[$id] = getProductObjectFromID( $id, $name  );
        }
    }

    function getProducts() {
        return $this->products;
    }

    function getProduct( $id ) {
        if ( isset( $this->products[$id] ) ) {
            return $this->products[$id];
        }
        return null;
    }
}

$facade = new ProductFacade( 'facade.txt' );
$object = $facade->getProduct( 532 );

print_r( $object );
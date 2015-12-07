<?php
// old
/*
PROTOTYPE
Используется для задания вида создаваемых объектов на основе объекта 
прототипа, от торого происходит передача внутреннего соcтoяния. Prototype позволяет
избавиться от жесткой привязки к классам и, как следствие, вязкости кода.

Pattern Singleton, который предоставляет глобальный доступ к единственному
экземпляру объекта, и рассмотрели также шаблон
Factory Method, в котором принцип полиморфизма применяется к генерации объектов.
Мы использовали сочетание шаблонов Factory Method и Abstract Factory для
генерации классов-создателей. которые создают экземпляры наборов связанных
объектов. И наконец мы рассмотрели шаблон Prototype и увидели, как клонирование
объектов позволяет использовать композицию при генерации объектов.
*/
class EarthSea extends Sea {}
class MarsSea extends Sea {}

class Plains {}
class EarthPlains extends Plains {}
class MarsPlains extends Plains {}

class Forest {}
class EarthForest extends Forest {}
class MarsForest extends Forest {}

class TerrainFactory {
    private $sea;
    private $forest;
    private $plains;

    function __construct( Sea $sea, Plains $plains, Forest $forest ) {
        $this->sea = $sea;
        $this->plains = $plains;
        $this->forest = $forest;
    }

    function getSea( ) {
        return clone $this->sea;
    }

    function getPlains( ) {
        return clone $this->plains;
    }

    function getForest( ) {
        return clone $this->forest;
    }
}

// new/changed
class Sea {
    private $navigability = 0;
    function __construct( $navigability ) {
        $this->navigability = $navigability;
    }
}

$factory = new TerrainFactory( new EarthSea( -1 ),
    new EarthPlains(),
    new EarthForest() );
print_r( $factory->getSea() );
print_r( $factory->getPlains() );
print_r( $factory->getForest() );
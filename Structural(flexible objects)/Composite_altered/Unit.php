<?php

/**
 * Created by PhpStorm.
 * User: Виктор Сидоренко
 * Date: 09.12.2015
 * Time: 18:32
*/
abstract class Unit {
    protected $depth=0;
    function getComposite() {
        return null;
    }

    function accept( ArmyVisitor $visitor ) {
        $method = "visit".get_class( $this );
        $visitor->$method( $this );
    }
    protected function setDepth( $depth ) {
        $this->depth=$depth;
    }

    function getDepth() {
        return $this->depth;
    }
    abstract function bombardStrength();
}
<?php
/**
 * Created by PhpStorm.
 * User: Виктор Сидоренко
 * Date: 09.12.2015
 * Time: 18:33
 */
require_once "Unit.php";
abstract class CompositeUnit extends Unit {
    private $units = array();

    function getComposite() {
        return $this;
    }

    protected function units() {
        return $this->units;
    }

    function removeUnit( Unit $unit ) {
        $this->units = array_udiff( $this->units, array( $unit ),
                        function( $a, $b ) { return ($a === $b)?0:1; } );

    }
    function addUnit( Unit $unit ) {
        foreach ( $this->units as $thisunit ) {
            if ( $unit === $thisunit ) {
                return;
            }
        }
        $unit->setDepth($this->depth+1);
        $this->units[] = $unit;
    }
    function accept( ArmyVisitor $visitor ) {
        $method = "visit".get_class( $this );
        $visitor->$method( $this );
        foreach ( $this->units as $thisunit ) {
            $thisunit->accept( $visitor );
        }
    }
}
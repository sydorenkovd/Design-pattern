<?php
/**
 * Created by PhpStorm.
 * User: Виктор Сидоренко
 * Date: 09.12.2015
 * Time: 18:34
 */
require_once "CompositeUnit.php";
require_once "Unit.php";
class Army extends CompositeUnit {

    function bombardStrength() {
        $ret = 0;
        foreach( $this->units() as $unit ) {
            $ret += $unit->bombardStrength();
        }
        return $ret;
    }

}

class Archer extends Unit {
    function bombardStrength() {
        return 4;
    }
}

class LaserCannonUnit extends Unit {
    function bombardStrength() {
        return 44;
    }
}

class Cavalry extends Unit {
    function bombardStrength() {
        return 33;
    }
}
class TroopCarrier {

    function addUnit( Unit $unit ) {
        if ( $unit instanceof Cavalry ) {
            throw new UnitException("Can't get a horse on the vehicle");
        }
        super::addUnit( $unit );
    }

    function bombardStrength() {
        return 0;
    }
}
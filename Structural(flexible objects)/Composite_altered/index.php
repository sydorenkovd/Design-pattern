<?php
require_once "Visitor.php";
require_once "Army.php";
require_once "CompositeUnit.php";
require_once "Unit.php";

class UnitException extends Exception {}
$main_army = new Army();
$main_army->addUnit( new Archer() );
$main_army->addUnit( new LaserCannonUnit() );
$main_army->addUnit( new Cavalry() );
$textdump = new TextDumpArmyVisitor();
$main_army->accept( $textdump  );

print $textdump->getText();


$main_army = new Army();
$main_army->addUnit( new Archer() );
$main_army->addUnit( new LaserCannonUnit() );
$main_army->addUnit( new Cavalry() );

$taxcollector = new TaxCollectionVisitor();
$main_army->accept( $taxcollector );
print $taxcollector->getReport();
print "TOTAL: ";
print $taxcollector->getTax()."\n";

// mz: end add client code
?>

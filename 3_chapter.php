<?php
// class ShopProduct {
// public $numPages;
// public $playLength;
// public $title;
// public $producerMainName;
// public $producerFirstName;
// public $price;
// public $type;
// 	function __construct( $title, $firstName,
// 	$mainName, $price,
// 	$numPages=0, $playLength=0, $type) {
// 	$this->title = $title;
// 	$this->producerFirstName = $firstName;
// 	$this->producerMainName = $mainName;
// 	$this->price = $price;
// 	$this->numPages = $numPages;
// 	$this->playLength = $playLength;
// 	$this->type = $type;
// }
// 	function getNumberOfPages() {
// 		return $this->numPages;
// }
// 	function getPlayLength() {
// 		return $this->playLength;
// }
// 	function getProducer() {
// 		return "{$this->producerFirstName}".
// 				" {$this->producerMainName}";
// }
// 	function getSummaryLine() {
// 		$base = "{$this->title} ( {$this->producerMainName}, ";
// 		$base .= "{$this->producerFirstName} )";
// 	if ( $this->type == 'book' ) {
// 		$base .= ": page count - {$this->numPages}";
// } else if ( $this->type == 'cd' ) {
// 		$base .= ": playing time - {$this->playLength}";
// }
// echo $base;
// return $base;

// }
// }
// $firstCD = new ShopProduct("Hit-90", "Viktor", "Sydorenko", "10.54", "", "34:32", "cd");
// $firstCD->getSummaryLine();
//=============================
// class CdProduct {
// public $playLength;
// public $title;
// public $producerMainName;
// public $producerFirstName;
// public $price;
// 	function __construct( $title, $firstName,
// 							$mainName, $price,
// 								$playLength ) {
// $this->title = $title;
// $this->producerFirstName = $firstName;
// $this->producerMainName = $mainName;
// $this->price = $price;
// $this->playLength = $playLength;
// }
// 	function getPlayLength() {
// 		return $this->playLength;
// }
// 	function getSummaryLine() {
// 		$base = "{$this->title} ( {$this->producerMainName}, ";
// 		$base .= "{$this->producerFirstName} )";
// 		$base .= ": playing time - {$this->playLength}";
// 			return $base;
// }
// 	function getProducer() {
// 		return "{$this->producerFirstName}".
// 			" {$this->producerMainName}";
// }
// }
// class BookProduct {
// public $numPages;
// public $title;
// public $producerMainName;
// public $producerFirstName;
// public $price;
// 	function __construct( $title, $firstName,
// 							$mainName, $price,
// 									$numPages ) {
// $this->title = $title;
// $this->producerFirstName = $firstName;
// $this->producerMainName = $mainName;
// $this->price = $price;
// $this->numPages = $numPages;
// }
// 	function getNumberOfPages() {
// 		return $this->numPages;
// }
// 	function getSummaryLine() {
// $base = "{$this->title} ( {$this->producerMainName}, ";
// $base .= "{$this->producerFirstName} )";
// $base .= ": page count - {$this->numPages}";
// 		return $base;
// }
// 	function getProducer() {
// 		return "{$this->producerFirstName}".
// 				" {$this->producerMainName}";
// }
// }
//========================================
class ShopProduct {
public $title;
public $producerMainName;
public $producerFirstName;
public $price;
	function __construct( $title, $firstName,
							$mainName, $price ) {
$this->title = $title;
$this->producerFirstName = $firstName;
$this->producerMainName = $mainName;
$this->price = $price;
}
	function getProducer() {
		return "{$this->producerFirstName}".
				" {$this->producerMainName}";
}
	function getSummaryLine() {
$base = "{$this->title} ( {$this->producerMainName}, ";
$base .= "{$this->producerFirstName}, ";
$base .= "{$this->price} )";
		return $base;
}
}
class CdProduct extends ShopProduct {
public $playLength;
	function __construct( $title, $firstName,
						$mainName, $price, $playLength ) {
	parent::__construct( $title, $firstName,
							$mainName, $price );
$this->playLength = $playLength;
}
	function getPlayLength() {
		return $this->playLength;
}
	function getSummaryLine() {
$base = parent::getSummaryLine();
$base .= ": playing time - {$this->playLength}";
echo $base;
		return $base;
}
}
class BookProduct extends ShopProduct {
public $numPages;
	function __construct( $title, $firstName,
					$mainName, $price, $numPages ) {
	parent::__construct( $title, $firstName,
							$mainName, $price );
$this->numPages = $numPages;
}
	function getNumberOfPages() {
		return $this->numPages;
}
	function getSummaryLine() {
$base = parent::getSummaryLine();
$base .= ": page count - $this->numPages";
echo $base . "<br>";
		return $base;
}
}
$book = new BookProduct("Master and Margaruta", "Mihail", "Bulgakov",
								"45$", "456");
$shakira = new CdProduct("My Mister", "NoName", "Shakira",
								"25$", "56:01");
$book->getSummaryLine();
$shakira->getSummaryLine();
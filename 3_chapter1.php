<?php
// require "3_chapter.php";
// class ShopProductWriter extends ShopProduct{
// private $products = [];
// 	public function addProduct( ShopProduct $shopProduct ) {
// 		$this->products[] = $shopProduct;
// }
// 	public function write() {
// 	$str = "";
// 		foreach ( $this->products as $shopProduct ) {
// $str .= "{$shopProduct->title}: ";
// $str .= $shopProduct->getProducer();
// $str .= " ({$shopProduct->getPrice()})\n";
// }
// print $str;
// }
// }
class ShopProduct {
private $title;
private $producerMainName;
private $producerFirstName;
protected $price;
private $discount = 0;
public function __construct( $title, $firstName,
								$mainName, $price ) {
$this->title = $title;
$this->producerFirstName = $firstName;
$this->producerMainName = $mainName;
$this->price = $price;
}
public function getProducerFirstName() {
	return $this->producerFirstName;
}
public function getProducerMainName() {
	return $this->producerMainName;
}
public function setDiscount( $num ) {
	$this->discount=$num;
}
public function getDiscount() {
	return $this->discount;
}
public function getTitle() {
	return $this->title;
}
public function getPrice() {
	return ($this->price - $this->discount);
}
public function getProducer() {
	return "{$this->producerFirstName}".
			" {$this->producerMainName}";
}
public function getSummaryLine() {
$base = "{$this->title} ( {$this->producerMainName}, ";
$base .= "{$this->producerFirstName} )";
		return $base;
}
}
class CdProduct extends ShopProduct {
private $playLength = 0;
public function __construct( $title, $firstName,
								$mainName, $price, $playLength ) {
		parent::__construct( $title, $firstName,
								$mainName, $price );
$this->playLength = $playLength;
}
public function getPlayLength() {
	return $this->playLength;
}
public function getSummaryLine() {
$base = parent::getSummaryLine();
$base .= ": playing time - {$this->playLength}";
	return $base;
}
}
class BookProduct extends ShopProduct {
private $numPages = 0;
		public function __construct( $title, $firstName,
										$mainName, $price, $numPages ) {
			parent::__construct( $title, $firstName,
									$mainName, $price );
$this->numPages = $numPages;
}
public function getNumberOfPages() {
	return $this->numPages;
}
public function getSummaryLine() {
$base = parent::getSummaryLine();
$base .= ": page count - {$this->numPages}";
	return $base;
}
public function getPrice() {
	return $this->price;
}
}
?>

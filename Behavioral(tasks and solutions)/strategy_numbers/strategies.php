<?php
class EvenStrategy{
public function filter($n){
if(($n % 2) == 0 ){
	echo $n;
} else {
	echo " ";
}
	}
}
class OddStrategy{
	public function filter($n){
if(($n % 2) == 0 ){
	echo " ";
} else {
	echo $n;
}
	}
}
class NumberFilter{
	public $strategy;

	public function __construct($strategy){
			$this->strategy = $strategy;
	}
	public function filter($n){
		$this->strategy->filter($n);
	}

}
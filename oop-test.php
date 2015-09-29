<?php
// class Pet{
// 	public $name; //свойство класса
// 	public $type = "unknown"; //свойство класса
// 	function __construct($name, $type){
// 		$this->name = $name;
// 		$this->type = $type;
// 		// echo "Object created", "<br>";
// 	}
// 	function __destruct(){
// 		echo "Object deleted", "<br>";
// 	}
// 	function say($word){
// 		$this->drawLine();
// 		echo $this->name . " said $word";
// 		$this->drawLine();
// 	}
// 	function drawLine(){ echo "<hr>";}
// }
// 	$cat = new Pet("murzik", "cat"); //два обьекта, два ексземпляра класса
// 	$dog = new Pet("Druzok", "dog");
// echo gettype($cat), "<br>";
// echo $cat->name;
// echo $cat->say("мяу...");
// echo $dog->say("gav...");

// class Vasya{
// 	public $name = "Vasiliy";
// 	public $type = "Man";
// 	public $value = "Programmer";
	
// 	function say(){
// 		echo "Function --" . __FUNCTION__;
// 		$this->drawLine();
// 	}
// 	function say1(){
// 		echo "CLASS --" . __CLASS__;
// 		$this->drawLine();
// 	}
// 	function say2(){
// 		echo "Method --" . __METHOD__;
// 		$this->drawLine();
// 	}
// 	function drawLine(){ echo "<hr>";}
// }
// 	$hand = new Vasya();
// 	$leg = new Vasya();
// echo $leg->say();
// echo $leg->say1();
// echo $leg->say2();
// echo $hand->name, "<br>";
// echo $hand->type, "<br>";
// echo $hand->value, "<br>";
//===============================================
// function test($var = false){
// try {
// echo "Start<br>";

// if(!$var)
//  throw new Exception('$var is false!' . "<br>");
// echo "Continue<br>";
// }catch(Exception $e){
// echo "Exception: " . $e->getMessage() . "\n";
// echo "in file: " . $e->getFile() . "\n";
// echo "on line: " . $e->getLine() . "\n";
// }
// echo "The end<br>";
// }
// var_dump(test(1), test());
//==================
// function foo(){
// bar();
// echo "Хорошо";
// try {
// echo $e->getMessage();
// }catch(Exception $e){
// }
// }
// function bar(){
// baz();
// }
// // ...
// function baz(){
// // Что-то делаем
// 	$param = true;
// if(!$param)
// throw new Exception("Плохо!");
// }
// foo();
function test($var = false){
try {
echo "TRY\n";

if(!$var)
	throw new Exception("Error");
}catch(Exception $e){
echo "CATCH\n";
}finally{
echo "FINALLY\n";
}
}
var_dump(test(), test(1));
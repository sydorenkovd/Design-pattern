<?php
interface I {
    function foo();
    function bar();
}

class A implements I {
	public function foo() { echo "A: doing foo()"; }
	public function bar() { echo "A: doing bar()"; }
}

class B implements I {
	public function foo() { echo "B: doing foo()"; }
	public function bar() { echo "B: doing bar()"; }
}

class C implements I {
	// Делегирование
	protected $i = null;
	
	function __construct(){
		$this->i = new A();
	}

	public function foo() { $this->i->foo(); }
	public function bar() { $this->i->bar(); }

	// normal attributes
	public function toA() { $this->i = new A(); }
	public function toB() { $this->i = new B(); }
}

$c = new C();

$c->foo();     // output: A: doing foo()
$c->bar();     // output: A: doing bar()
$c->toB();
$c->foo();     // output: B: doing foo()
$c->bar();     // output: B: doing bar()

?> 
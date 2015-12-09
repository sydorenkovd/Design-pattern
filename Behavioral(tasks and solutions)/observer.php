<?php
class Newspaper{ // Observer
	public $observers = array();
	public $paper_name;
	public $news;
    
	public function __construct($paper_name){
		$this->paper_name = $paper_name;
    }
    public function registerObserver(Subscriber $obj){
        $this->observers[$obj->name] = $obj;
    }
    public function removeObserver($obj){
        unset($this->observers[$obj->name]);
    
    }
    public function notifyObservers(){
        foreach($this->observers as $observer) {
            $observer->update($this->news);
        }
    }
    public function generateNews($news){
        $this->news = $news;
        $this->notifyObservers();
    }
}

class Subscriber{
    public $newspaper;
    public $name;
	
    function __construct($name){
		$this->name = $name;
    }
    function Subscribe(Newspaper $newspaper){
        $this->newspaper = $newspaper;
        $this->newspaper->registerObserver($this);
        print $this->name.' подписался на газету "'.$newspaper->paper_name.'".<br>';
    }
    function Unsubscribe(){
        $this->newspaper->removeObserver($this);
        print $this->name.' решил сэкономить деньги и отписался от газеты "<b>'.$this->newspaper->paper_name.'</b>".<br>';
    }
    function update($news){
        print 'В новом номере газеты <b>"'.$this->newspaper->paper_name.'"</b> читатель '.$this->name.' прочитал:"'.$news.'"<br>';
    }
}

$newspaper = new Newspaper('Спорт-экспресс');
$user1 = new Subscriber('Вася Пупкин');
$user1->Subscribe($newspaper);

$newspaper->generateNews("Сборная России по футболу стала чемпионом мира!");

$user2 = new Subscriber('Коля Иванов');
$user2->Subscribe($newspaper);

$newspaper->generateNews("Сборная Бразилии по хоккею стала чемпионом мира!");
$user1->Unsubscribe();
$newspaper->generateNews("Пермский Амкар стал чемпионом России по футболу!");
?> 
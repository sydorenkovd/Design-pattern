<?php
abstract class Question {
	protected $prompt;
	protected $marker;
	function __construct( $prompt, Marker $marker ) {
		$this->marker=$marker;
		$this->prompt = $prompt;
	}
	function mark( $response ) {
		return $this->marker->mark( $response );
	}
}
class TextQuestion extends Question {
	// Текстовый вопрос
}
class AQuestion extends Question {
	// Аудио вопрос
}
class VQuestion extends Question {
	// Видео вопрос
}
abstract class Marker {
	protected $test;
	function __construct( $test ) {
		$this->test = $test;
	}
	abstract function mark( $response );
}
class MarkLogicMarker extends Marker {
	private $engine;
	function __construct( $test ) {
		parent::__construct( $test );
		// $this->engine = new MarkParse( $test );
	}
	function mark( $response ) {
		// return $this->engine->evaluate( $response );
		// dummy return value
		return true;
	}
}
class MatchMarker extends Marker {
	function mark( $response ) {
		return ( $this->test == $response );
	}
}
class RegexpMarker extends Marker {
	function mark( $response ) {
		return ( preg_match( $this->test, $response ) );
	}
}

$markers = array( new RegexpMarker( "/f.ve/" ),
					new MatchMarker( "five" ),
					new MarkLogicMarker( '$input equals "five"' )
				);
foreach ( $markers as $marker ) {
	print get_class( $marker )."<br>\n";
	$question = new TextQuestion( "Сколько пальцев на руке у Чебурашки?", $marker );
	foreach ( array( "five", "four" ) as $response ) {
		print "\tответ: $response: ";
		if ( $question->mark( $response ) ) {
			print "Да<br>\n";
		} else {
			print "Нет<br>\n";
		}
	}
}
?>
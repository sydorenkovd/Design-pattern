<?php

class HTMLDecorator
{
    protected $book = null;

    public function __construct($book_object)
    {
        $this->book = $book_object;
    }

    public function render()
    {
        $properties = get_object_vars($this->book);

        echo '<ul>';
        foreach($properties as $key => $value) {
            echo '<li>' . $key . ' -- ' . $value . '</li>';
        }
        echo '</ul>';
    }
}
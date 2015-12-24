<?php

class JSONDecorator
{
    protected $book = null;

    public function __construct($book_object)
    {
        $this->book = $book_object;
    }

    public function render()
    {
        echo json_encode($this->book);
    }
}
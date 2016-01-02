<?php

class Output
{
    protected $formatter = null;

    public function __construct($formatter)
    {
        $this->formatter = $formatter;
    }

    public function setter($formatter)
    {
        $this->formatter = $formatter;
    }

    public function display($input)
    {
        return $this->formatter->output($input);
    }
}
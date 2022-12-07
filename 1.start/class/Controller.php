<?php

class Controller
{
    public function execute($method) 
    {
        if (method_exists($this, $method))
            $this->$method();
    }

    public function view($view)
    {
        include "Views/{$view}.php";
    }
}

<?php

class Router
{
    private $uri = null;

    function __construct($uri = null)
    {
        $this->uri = $uri ?? "";
    }

    public function parseRoute($uri = "") 
    {
        if ($uri) $this->uri = $uri;
        
        $route = str_replace('', "", $this->uri);
        $route = explode('/', $this->uri);
        
        return $route;
    }
}
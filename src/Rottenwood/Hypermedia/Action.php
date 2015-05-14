<?php

namespace Rottenwood\Hypermedia;

class Action implements ActionInterface
{
    public $name;
    public $description;
    public $method;
    public $url;

    /**
     * @param $name
     * @param $method
     * @param $url
     */
    public function __construct($name, $url, $method)
    {
        $this->name = $name;
        $this->method = $method;
        $this->url = $url;
    }
}

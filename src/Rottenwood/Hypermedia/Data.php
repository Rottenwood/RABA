<?php

namespace Rottenwood\Hypermedia;

class Data implements DataInterface
{
    public $data;

    /**
     * @param $data
     */
    public function __construct($data = null)
    {
        $this->data = $data;
    }
}

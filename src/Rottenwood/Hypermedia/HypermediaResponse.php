<?php

namespace Rottenwood\Hypermedia;

class HypermediaResponse
{
    /** @var ActionInterface */
    private $actions;
    /** @var DataInterface */
    private $data;

    /**
     * HypermediaResponse constructor.
     * @param ActionInterface $actions
     * @param DataInterface $data
     */
    public function __construct(ActionInterface $actions, DataInterface $data)
    {
        $this->actions = $actions;
        $this->data = $data;
    }
}

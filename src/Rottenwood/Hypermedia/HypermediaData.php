<?php

namespace Rottenwood\Hypermedia;

class HypermediaData
{
    /** @var ActionCollection */
    private $actions;
    /** @var DataInterface */
    private $data;

    /**
     * @param ActionCollection $actions
     * @param DataInterface $data
     */
    public function __construct(ActionCollection $actions, DataInterface $data)
    {
        $this->actions = $actions;
        $this->data = $data;
    }

    public function getJson()
    {
        return json_encode(array_merge([
            'actions' => $this->actions,
        ], (array) $this->data));
    }

}

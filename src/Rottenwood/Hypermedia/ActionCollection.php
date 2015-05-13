<?php

namespace Rottenwood\Hypermedia;

class ActionCollection
{
    /** @var ActionInterface[] */
    private $actions = [];

    /**
     * @return ActionInterface[]
     */
    public function getActions()
    {
        return $this->actions;
    }

    /**
     * @param ActionInterface $action
     */
    public function addAction(ActionInterface $action)
    {
        $this->actions[] = $action;
    }

    /**
     * @param ActionInterface $actionToRemove
     * @return bool
     */
    public function deleteAction(ActionInterface $actionToRemove)
    {
        foreach ($this->actions as $key => $action) {
            if ($actionToRemove === $action) {
            	unset($this->actions[$key]);
                return true;
            }
        }

        return false;
    }
}

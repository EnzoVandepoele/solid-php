<?php

interface BasicEventInterface
{
    /**
     * Returns the name of the event
     *
     * @return string
     */
    public function name() : string;

    /**
     * Returns the list of properties of the event
     *
     * @return array
     */
    public function fields() : array;

    /**
     * Returns the payload of the event
     *
     * @return array
     */
    public function payload() : array;
}

interface ActionableEventInterface extends BasicEventInterface
{
    /**
     * If the event is actionable, returns the list of available actions
     *
     * @return array
     */
    public function action() : array;
}

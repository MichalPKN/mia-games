<?php

abstract class Controller {

    protected $page;
    protected $uriParams;

    public function __construct(array $uriParams)
    {
        $this->page = array_shift($uriParams);
        $this->uriParams = $uriParams;
    }

    abstract public function render(): string;
}
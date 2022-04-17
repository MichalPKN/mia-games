<?php

/**
 * abstract class Controller that GamesController and PageController inherits from
 */
abstract class Controller {

    /**
     * Current page name
     *
     * @var string
     */
    protected $page;

    /**
     * further url parameters if any
     *
     * @var string
     */
    protected $uriParams;

    public function __construct(array $uriParams)
    {
        $this->page = array_shift($uriParams);
        $this->uriParams = $uriParams;
    }


    abstract public function render(): string;
}
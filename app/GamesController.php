<?php

class GamesController extends Controller {

    private $page;
    private $uriParams;

    public function __construct(array $uriParams)
    {
        $this->page = array_shift($uriParams);
        $this->uriParams = $uriParams;
    }

    public function render(): string
    {
        return "bruh";
    }

}
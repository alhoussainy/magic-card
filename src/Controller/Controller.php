<?php


namespace projetMagicCard\Controller;


class Controller
{

    protected $pathTemplate=__DIR__.'/../../templates/';

    public function render( string $pathname , array  $value)
{
 extract($value);
 include $this->pathTemplate.$pathname;

    }
}
<?php namespace Formativ\Cms;

interface EngineInterface{
    public function render($template, $data);
}
<?php namespace Formativ\Cms\Engine;

use Formativ\Cms\CompilerInterface;
use Formativ\Cms\EngineInterface;
use Whoops\Example\Exception;

class Blade implements EngineInterface
{
    protected $compiler;

    public function __construct(CompilerInterface $compiler)
    {
        $this->compiler = $compiler;
    }

    public function render($template,$data)
    {
        $compiled = $this->compiler->compileString($template);

        ob_start();

        extract($data, EXTR_SKIP);

        try
        {
            eval("?>" . $compiled);
        }
        catch(Exception $e)
        {
            ob_end_clean();
            throw $e;
        }

        $result = ob_get_content();
        ob_end_clean();
        return $result;

    }
}
<?php

class BindToMe
{
    private $closure;

    public function __construct(Closure $closure)
    {
        $this->closure = $closure;
    }

    public function hello()
    {
        echo ($this->closure)();
    }
}
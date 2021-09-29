<?php

use Opis\Closure\SerializableClosure;

require '../vendor/autoload.php';
require 'BindToMe.php';

$serializable = new SerializableClosure(
    Closure::bind(
        function () {
            $this->hello();
        },
        new BindToMe(fn() => 'Hi, this is from Opis'),
        BindToMe::class
    )
);

$s = serialize($serializable);
unserialize($s)();


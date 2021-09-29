<?php


use Laravel\SerializableClosure\SerializableClosure;

require '../vendor/autoload.php';
require 'BindToMe.php';

$serializable = new SerializableClosure(
    Closure::bind(
        function () {
            $this->hello();
        },
        new BindToMe(fn() => 'This is from Laravel'),
        BindToMe::class
    )
);

$s = serialize($serializable);

unserialize($s)();

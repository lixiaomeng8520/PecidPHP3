<?php

$func = function() {
    echo 1;
};

class A {
    private $a;
}

$a = new A();


var_dump($a instanceof Callable);
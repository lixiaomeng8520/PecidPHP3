<?php 
use Respect\Validation\Validator as V;

$container['validator'] = [
    'username'  =>  function() {
        return V::alnum()->noWhitespace();
    },

    'number'    =>  function() {
        return V::positive();
    }
];


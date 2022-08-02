<?php

$first = [
    "first_name" => "Frengky"
];

$last = [
    "first_name" => "Budi",
    "last_name" => "Khannedy"
];

$full = $first + $last;
var_dump($full);

$a = [
    "first_name" => "Frengky",
    "last_name" => "Manurung"
];

$b = [
    "last_name" => "Manurung",
    "first_name" => "Frengky"
];

var_dump($a == $b);
var_dump($a === $b);
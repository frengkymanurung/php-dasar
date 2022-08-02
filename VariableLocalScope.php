<?php

function createName()
{
    $name = "Frengky"; // local scope
}

createName();
echo $name . PHP_EOL;

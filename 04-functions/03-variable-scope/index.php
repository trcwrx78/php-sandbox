<?php

// Global scope
$name = 'Alice';

function sayHello()
{
    global $name;
    // Local scope
    $name = 'Bob';
    echo 'Hello ' . $name;
}

function sayGoodbye()
{
    // Local
    $names = ['Jack', 'Jill'];
    // echo 'Goodbye ' . $names[0];
}

// Global
sayGoodbye();
echo $names[0];

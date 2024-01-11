<?php

define('APP_NAME', 'My App');
define('APP_VERSION', '1.0.0');


const DB_NAME = 'mydb';
const DB_HOST = 'localhost';



function run()
{
    echo APP_NAME;
    echo DB_NAME, DB_HOST;
}

run();

// define('APP_NAME', 'My App 2');
// const DB_NAME = 'test';

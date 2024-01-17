<?php

session_start();

$_SESSION['name'] = 'Todd';

if (isset($_SESSION['name'])) {
    echo 'Name: ' . $_SESSION['name'];
} else {
    echo 'Name is not set';
}

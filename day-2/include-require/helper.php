<?php
$greeting = "Hello, World!";

function sayHello($name) {
    global $greeting;
    return $greeting . " with ".$name;
}

?>
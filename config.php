<?php
session_start();

$db = mysqli_connect("localhost", "root", "", "alpha_table");

if(!$db) die(mysqli_error($db));

function dd($var) {
    echo '<pre>';
    echo '<code>';
    print_r($var);
    echo '</code>';
    echo '</pre>';
}

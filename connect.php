<?php
ini_set('default_charset', 'utf-8');
$con = new mysqli('localhost', 'root', '', 'crud');


if (!$con) {

    die(mysqli_error($con));
}

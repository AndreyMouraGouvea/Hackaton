<?php
ini_set('default_charset', 'utf-8');
$con = new mysqli('localhost', 'owlcompanyuser', 'POo+LjjJh4vruom4', 'owlcompany');


if (!$con) {

    die(mysqli_error($con));
}

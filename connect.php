<?php
ini_set('default_charset', 'utf-8');
$con = new mysqli('localhost', 'owlcompanyuser', '}~KR-<JU[UF1TpzI', 'owlcompany');


if (!$con) {

    die(mysqli_error($con));
}

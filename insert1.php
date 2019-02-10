<?php

include_once 'crud_class.php';



$fname = $_POST['fname'];
$lname = $_POST['lname'];

$email = $_POST['email'];

$crud = new crud;

$crud->insert($fname, $lname, $email);



?>
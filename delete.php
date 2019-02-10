<?php

include_once 'crud_class.php';

//$id =$_GET['id'];


$crud = new crud;

//getting id of the data from url
//
//$id = $crud->escape_string($_GET['id']);

$id =$_GET['id'];

$result = $crud->delete($id, 'users');

//$crud->delete();



?>
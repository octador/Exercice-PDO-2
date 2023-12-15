<?php

require_once('../utilis/connect.php');
include_once('../pages/header.php');
include_once('../pages/header.php');

// UPDATE table_name
// SET column1 = value1, column2 = value2, ...
// WHERE condition; 
if( isset($_POST['lastname'])&& !empty($_POST['lastname'])&&

isset($_POST['firstname'])&& !empty($_POST['firstname'])&&

isset($_POST['birthdate'])&& !empty($_POST['birthdate'])&&

isset($_POST['mail'])&& !empty($_POST['mail'])&&

isset($_POST['phone'])&& !empty($_POST['phone']))
{


$stmt =$db->prepare('UPDATE patients SET lastname = :lastname ,firstname=  :firstname  ,birthdate=  :birthdate ,mail =  :mail  , phone=  :phone WHERE id='.$patient['id']) ;
$stmt->execute([
    'lastname'=> $_POST['lastname'],
    'firstname'=>$_POST['firstname'],
    'birthdate'=>$_POST['birthdate'],
    'mail'=>$_POST['mail'],
    'phone'=>$_POST['phone']
]);


}

header('Location: ../partials/liste-patients.php')








?>
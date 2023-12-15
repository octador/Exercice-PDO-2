<?php

if( isset($_POST['lastname'])&& !empty($_POST['lastname'])&&

isset($_POST['firstname'])&& !empty($_POST['firstname'])&&

isset($_POST['birthdate'])&& !empty($_POST['birthdate'])&&

isset($_POST['mail'])&& !empty($_POST['mail'])&&

isset($_POST['phone'])&& !empty($_POST['phone']))
{
require_once('./connect.php');

$sql = "INSERT INTO patients (lastname, firstname, birthdate, mail, phone)  
VALUES (:lastname, :firstname, :birthdate, :mail, :phone)";

$stmt = $db->prepare($sql);

$stmt->execute([
    'lastname'=> $_POST['lastname'],
    'firstname'=>$_POST['firstname'],
    'birthdate'=>$_POST['birthdate'],
    'mail'=>$_POST['mail'],
    'phone'=>$_POST['phone']
]);

}

?> 
<?php
require_once('./connect.php');

$request = $db->query('SELECT * FROM patients ');
$patients = $request->fetchAll();

foreach ($patients as $key => $patient) {

   echo '<p>'. $patient['lastname'].'</p>',
   '<p>'. $patient['firstname'].'</p>',
   '<p>'. $patient['birthdate'].'</p>',
   '<p>'. $patient['phone'].'</p>',
   '<p>'. $patient['mail'].'</p>',
   '<p>'. $patient['id'].'</p>',
   '<hr>';
    
    
}




?>


<?php

require_once('../utilis/connect.php');
include_once('../pages/header.php');
include_once('../pages/footer.php');


$request = $db->query('SELECT * FROM patients ');
$patients = $request->fetchAll();

foreach ($patients as $patient) {

    echo '<p>' . $patient['lastname'] . '</p>',
    '<p>' . $patient['firstname'] . '</p>',
    '<p>' . $patient['birthdate'] . '</p>',
    '<p>' . $patient['phone'] . '</p>',
    '<p>' . $patient['mail'] . '</p>',

    '<form action="profil-patient.php" method="post">
        <input type="hidden" name="id" value="' . $patient['id'] . '">
        <button type="submit"> Voir profile</button>
    </form>',
    //    '<a href="profil-patient.php?id=' . $patient['id'] . '">  voir profile </a>',


    '<hr>';
}

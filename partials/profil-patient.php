<?php

require_once('../utilis/connect.php');

if (isset($_POST['id'])) {

    $patient = $_POST['id'];

    $request = $db->query('SELECT * FROM patients WHERE id =' . $patient);
    $patient = $request->fetch();

    echo '<p>' . $patient['lastname'] . '</p>',
    '<p>' . $patient['firstname'] . '</p>',
    '<p>' . $patient['birthdate'] . '</p>',
    '<p>' . $patient['phone'] . '</p>',
    '<p>' . $patient['mail'] . '</p>';
}
?>
<a href="../partials/modif-patient.php">Modification</a>
<a href="./liste-patients.php"> retour a la liste de patients </a>
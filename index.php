<?php

require_once('./connect.php');



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./ajout-patient.php" method="post">
        <label for="lastname">Nom : </label>
        <input type="text" name="lastname" id="">

        <label for="firstname">Prénom : </label>
        <input type="text" name="firstname" id="">

        <label for="birthdate"> date de naissance : </label>
        <input type="date" name="birthdate" id="">

        <label for="email">Mail : </label>
        <input type="email" name="mail" id="">

        <label for="phone"> Téléphone : </label>
        <input type="tel" name="phone" id="">

        <input type="submit" value="VALIDER">
        <input type="reset" value="reset">
    </form>

</body>

</html>
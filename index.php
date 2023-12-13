<?php

require_once('./connect.php');
$request = $db->query('SELECT * FROM firstname');
$user = $request->fetch();
var_dump($user);


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

        <label for="birsthdate"> date de naissance : </label>
        <input type="date" name="birsthdate" id="">

        <label for="mail">Mail : </label>
        <input type="mail" name="mail" id="">

        <label for="phone"> Téléphone : </label>
        <input type="tel" name="phone" id="">

        <input type="submit" value="VALIDER">
        <input type="reset" value="reset">
    </form>

</body>

</html>
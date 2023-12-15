<?php
require_once('../utilis/connect.php');
include_once('../pages/header.php');
include_once('../pages/footer.php');

?>
    <form action="../utilis/process-modif.php" method="post">
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
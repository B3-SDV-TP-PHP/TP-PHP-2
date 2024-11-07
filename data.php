<?php
function showData($name, $mail, $phone)
{
    if (isset($name) && isset($mail) && isset($phone)) {
        return "Contact ajouté :<br>
        Nom : " . htmlspecialchars($name) . "<br>
        Email : " . htmlspecialchars($mail) . "<br>
        Téléphone : " . htmlspecialchars($phone) . "<br>";
    } else {
        return "Aucune donnée de contact reçue.";
    }
}
?>
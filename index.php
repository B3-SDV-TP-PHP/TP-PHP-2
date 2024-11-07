<?php 
require "header.php";
require "data.php";

echo "<h1>Gestion des contacts</h1>";

$name = "";
$mail = "";
$phone ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $phone = $_POST['phone'];
}


echo showData($name, $mail, $phone);
?>

<h2>Ajouter un contact</h2>
<form action='index.php' method='post'>
    <label for='name'>Nom: </label>
    <input type='text' name='name'>
    <label for='mail'>Mail: </label>
    <input type='text' name='mail'>
    <label for='phone'>Téléphone: </label>
    <input type='text' name='phone'>
    <input type='submit' value='Submit'>
</form>

<?php
require "footer.php";
?>
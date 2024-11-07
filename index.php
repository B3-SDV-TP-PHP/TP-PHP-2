<?php 
require "header.php";
require "data.php";
require "addData.php";

echo "<h1>Gestion des contacts</h1>";

$name = "";
$lastname = "";
$phone = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $phone = $_POST['phone'];
    if (addData($name, $lastname, $phone)) {
        echo "Contact ajouté :<br>
        Nom : " . htmlspecialchars($name) . "<br>
        lastname : " . htmlspecialchars($lastname) . "<br>
        Téléphone : " . htmlspecialchars($phone) . "<br>";
        header("Location: index.php?addData");
    }
    
    exit();
}

if (isset($_GET['addData'])) {
    echo $_GET['addData'];
}
?>
<link rel="stylesheet" href="styles.scss">

<form action='index.php' method='post'>
    <label for='name'>Nom: </label>
    <input type='text' name='name'>
    <label for='lastname'>lastname: </label>
    <input type='text' name='lastname'>
    <label for='phone'>Téléphone: </label>
    <input type='text' name='phone'>
    <input type='submit' value='Ajouter un contact'>
</form>

<?php
require "footer.php";
?>
<?php
try {
    $db = new PDO('mysql:host=localhost;dbname=supdevinci', 'root', '');
    echo "Connexion à la base de données réussie.<br>";
    $result = $db->query("SELECT * FROM user");
?>
    <table border='1'>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Téléphone</th>
        </tr>
        <?php while ($row = $result->fetch()) { ?>
            <tr>
                <td><?php echo htmlspecialchars($row['firstname']); ?></td>
                <td><?php echo htmlspecialchars($row['lastname']); ?></td>
                <td><?php echo htmlspecialchars($row['phone']); ?></td>
            </tr>
        <?php } ?>
    </table>
    <?php
}
catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
?>
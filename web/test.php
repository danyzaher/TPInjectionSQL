<?php

// Connexion à la base de données
$db = new PDO('mysql:host=localhost;dbname=Users', 'service', 'password');

// Récupération des informations de l'employé connecté
$sql = "SELECT id, name, eid, salary, birth, ssn, phoneNumber, address, email,nickname,Password FROM credential WHERE eid= ':eid'  and Password=':pass'";
$stmt = $db->prepare($sql);
$stmt->bindValue(':eid', $id_employe);
$stmt->bindValue(':pass', $password);
$stmt->execute();
$employee = $stmt->fetch();

// Affichage des informations de l'employé dans un tableau PHP
echo "<table>";
echo "<tr><th>Nom</th><td>" . $employee['nom'] . "</td></tr>";
echo "<tr><th>Prénom</th><td>" . $employee['prenom'] . "</td></tr>";
echo "<tr><th>Adresse e-mail</th><td>" . $employee['email'] . "</td></tr>";
echo "</table>";

?>

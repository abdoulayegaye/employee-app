<?php
    require_once 'employeDB.php';
    $employes = getEmployes();
    //var_dump($employes);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Liste des employés</title>
</head>
<body>
    <h2>Liste des employés</h2>
    <table border="1">
        <thead>
            <th>Matricule</th>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Adresse</th>
            <th>Salaire</th>
            <th>Département</th>
        </thead>
        <tbody>
            <?php foreach($employes as $e){ ?>
                <tr>
                    <td><?= $e['matricule'] ?></td>
                    <td><?= $e['prenom'] ?></td>
                    <td><?= $e['nomEmploye'] ?></td>
                    <td><?= $e['adresse'] ?></td>
                    <td><?= $e['salaire'] ?></td>
                    <td><?= $e['nomDepartement'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
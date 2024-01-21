<?php
    require_once 'employeDB.php';
    $departements = getDepartements();
    //var_dump($departements);

    if (isset($_POST['valider'])){
        $matricule = $_POST['matricule'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $adresse = $_POST['adresse'];
        $salaire = $_POST['salaire'];
        $id_departement = $_POST['id_departement'];
        $ok = addEmployee($matricule, $nom, $prenom, $adresse, $salaire, $id_departement);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ajout d'un employé</title>
</head>
<body>
    <h2>Ajout d'un employé</h2>
    <form method="POST">
        <?php
            if (isset($ok) && $ok == 1) {
                echo 'Employé inséré avec succés !';
            }
        ?>
        <fieldset>
            <div>
                <label for="">Matricule</label>
                <input type="text" name="matricule" placeholder="Votre matricule ici" required>
            </div>
            <br>
            <div>
                <label for="">Prénom</label>
                <input type="text" name="prenom" placeholder="Votre prénom ici" required>
            </div>
            <br>
            <div>
                <label for="">Nom</label>
                <input type="text" name="nom" placeholder="Votre nom ici" required>
            </div>
            <br>
            <div>
                <label for="">Adresse</label>
                <input type="text" name="adresse" placeholder="Votre adresse ici" required>
            </div>
            <br>
            <div>
                <label for="">Salaire</label>
                <input type="number" min="15000" max="500000" name="salaire" placeholder="Votre salaire ici" required>
            </div>
            <br>
            <div>
                <select name="id_departement">
                    <option value="0">--Sélectionner un département--</option>
                    <?php foreach($departements as $d){ ?>
                        <option value="<?= $d['id'] ?>"><?= $d['nom'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <br>
            <div>
                <input type="submit" value="Enregistrer" name="valider">
                <input type="reset" value="Annuler" name="annuler">
            </div>
            </fieldset>
    </form>
</body>
</html>
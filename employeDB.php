<?php

    //PDO::FETCH_NUM = 3
    //PDO::FETCH_ASSOC = 2

    require_once 'db.php';

    function getDepartements(){
        global $db;
        $sql = "SELECT * FROM departement ORDER BY nom ASC";
        return $db->query($sql)->fetchAll(2);
    }

    function addEmployee($matricule, $nom, $prenom, $adresse, $salaire, $id_departement){
        global $db;
        $sql = "INSERT INTO employe VALUES(null, '$matricule', '$nom', '$prenom', '$adresse', $salaire, $id_departement)";
        return $db->exec($sql); //0 ou 1
    }

    function getEmployes(){
        global $db;
        $sql = "SELECT matricule,e.nom as nomEmploye,d.nom as nomDepartement,prenom,adresse,salaire
                FROM employe e, departement d 
                WHERE e.id_departement=d.id 
                ORDER BY e.nom ASC";
        return $db->query($sql)->fetchAll(2);
    }
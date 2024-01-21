<?php
    //Parametres de connexion
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'employee_db';
    $chaineDeConnexion = 'mysql:host='.$host.';dbname='.$database;
    try {
        $db = new PDO($chaineDeConnexion, $user, $password);
        //echo 'Connexion réussie !';
    } catch (PDOException $e) {
        die('Error de connection : '.$e->getMessage());
    }
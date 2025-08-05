<?php
require_once 'db.php';

$sql = 'SELECT * FROM utilisateurs';
$userList = mysqli_query($connexion, $sql);

if (!$userList) {
    die("Erreur lors de la recuperation " . mysqli_error($connexion));
}

if (isset($_GET['action']) && isset($_GET['id'])) {
    if ($_GET['action'] == 'delete') {
        $id = $_GET['id'];
        $req = "DELETE FROM utilisateurs WHERE id = $id";
        mysqli_query($connexion, $req);
        header("Location: index.php");
    } elseif ($_GET['action'] == 'modif') {
        $id = $_GET['id'];
        header("Location: modif.php?id=$id");
    }
}


require_once 'liste.php';

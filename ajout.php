<?php
require_once "db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container col-8 offset-2">
        <h1 class="my-5">Ajouter un utilisateur</h1>
        <form method="post">
            <div class="mb-3">
                <label for="Nom" class="form-label">Nom</label>
                <input type="text" name="nom" class="form-control" id="Nom">
            </div>
            <div class="mb-3">
                <label for="Prenom" class="form-label">Prenom</label>
                <input type="text" name="prenom" class="form-control" id="Nom">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            <a href="index.php" class="btn btn-danger">Retour</a>
            <button type="submit" name="addBtn" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>

<?php
if (isset($_POST['addBtn'])) {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $sql = "INSERT INTO utilisateurs (nom,prenom,email,password) VALUES ('$nom','$prenom','$email','$password');";

    mysqli_query($connexion, $sql);
    header("Location: index.php");
}

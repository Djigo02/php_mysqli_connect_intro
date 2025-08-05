<?php
require_once "db.php";
?>

<?php
if (isset($_POST['modifBtn'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $id = $_POST['id'];
    $sql = "UPDATE utilisateurs SET nom='$nom' , password = '$password' , prenom='$prenom' , email='$email' WHERE id = $id;";
    mysqli_query($connexion, $sql);
    header("Location: index.php");
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $req = "SELECT * FROM utilisateurs WHERE id = $id";
    $result = mysqli_query($connexion, $req);
    $user = mysqli_fetch_assoc($result);
}
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
        <h1 class="my-5">Modification de l'utilisateur</h1>

        <?php if ($user) { ?>
            <form method="post">
                <input type="hidden" name="id" value="<?= $user['id'] ?>">
                <div class="mb-3">
                    <label for="Nom" class="form-label">Nom</label>
                    <input type="text" name="nom" value="<?= $user['nom'] ?>" class="form-control" id="Nom">
                </div>
                <div class="mb-3">
                    <label for="Prenom" class="form-label">Prenom</label>
                    <input type="text" name="prenom" value="<?= $user['prenom'] ?>" class="form-control" id="Nom">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" value="<?= $user['email'] ?>" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" value="<?= $user['password'] ?>" class="form-control" id="exampleInputPassword1">
                </div>
                <a href="index.php" class="btn btn-danger">Retour</a>
                <button type="submit" name="modifBtn" class="btn btn-warning">Modifier</button>
            </form>
        <?php  } else { ?>
            <h2>L'utilisateur n'existe pas</h2>
            <a href="index.php" class="btn btn-danger col-8 offset-2">Retour</a>
        <?php  } ?>

    </div>
</body>

</html>
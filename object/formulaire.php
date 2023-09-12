<?php
// creer un formulaire avec les champs:
// nom, prenom, login, mot de passe
// la validation du formulaire redirige vers action.php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="./action.php" method="post">
        <div class="mb-3">
            <label for="nom" class="form-label">nom</label>
            <input type="text" class="form-control" id="nom" aria-describedby="nom" name="nom">
            <div id="nom" class="form-text"></div>
        </div>
        <div class="mb-3">
            <label for=" prenom" class="form-label"> prenom</label>
            <input type="text" class="form-control" id=" prenom" name="prenom">
        </div>
        <div class="mb-3">
            <label for="login" class="form-label">login</label>
            <input type="text" class="form-control" name="login">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">mot de passe</label>
            <input type="text" class="form-control" id="password" name="password">
        </div>

        <button name="submit" type="submit" value="submit" class="btn btn-primary">envoyer</button>
    </form>

</body>

</html>
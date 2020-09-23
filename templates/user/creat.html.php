<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/node_modules/materialize-css/dist/css/materialize.css">
    <link rel="stylesheet" href="./../public/assets/css/fichier.css">
    <title>Title</title>
</head>
<body>

<?php include __DIR__ . '/../header.html.php'; ?>

<div class="container ">
    <div class="row pt-3 pb-3">
        <h2 class=" center display-3 mt-3 mb-3"><?= $titre ?> </h2>
    </div>

    <form class="col s12" action="#" method="post">

        <div class="row">
            <div class="input-field col s10">
                <input id="email" type="email" name="email">
                <label for="email">email</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s10">
                <input id="password" type="password" name="password">
                <label for="password">password</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s10">
                <input id="confirm" type="password" name="confirm">
                <label for="password">confirm</label>
            </div>
        </div>
        <div class="row">
            <input type="submit" name="create" class=" disable waves-effect waves-light btn #d50000 red accent-4">
        </div>
    </form>
</div>

<?php include __DIR__ . '/../footer.html.php'; ?>

</body>
</html>
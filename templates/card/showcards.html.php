<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/node_modules/materialize-css/dist/css/materialize.css">
    <link rel="stylesheet" href="../../public/assets/css/fichier.css">
    <title>Title</title>
</head>
<body>
<?php include __DIR__ . '/../header.html.php'; ?>
<main>
    <div class="container">
        <div class="row">
            <h1> Card Lis </h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="card-image">
                <?php foreach ($cardlist as $elem): ?>
                <img src="<?= $elem->getImageUrl() ?>">
            </div>
            <?php endforeach ?>
        </div>
    </div>
</main>
<div class="nav-extended filter center-align">
    <?php if ($optionsuivant["page"] < 0): ?>
        <a href="/cards?<?= http_build_query($optionavant) ?>"
           class="waves-effect waves-light btn #d50000 red accent-4">Previous</a>
    <?php else: ?>
        <a class=" disable waves-effect waves-light btn #d50000 red accent-4">Previous</a>
    <?php endif ?>
    <?php if (count($cardlist) > 0): ?>
        <a href="/cards?<?= http_build_query($optionsuivant) ?>"
           class="waves-effect waves-light btn #d50000 red  accent-4">Next</a>
    <?php else: ?>
        <a class=" disable waves-effect waves-light btn #d50000 red accent-4">Previous</a>
    <?php endif ?>
</div>
<script type="text/javascript" src="/node_modules/materialize-css/dist/js/materialize.js"></script>
<script type="text/javascript" src="./../../public/assets/js/fichier.js"></script>

<?php include __DIR__ . '/../footer.html.php'; ?>

</body>
</html>
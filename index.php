<?php
include("langs.php");
if(isset ($_GET['lang'])){
    $langcode = $_GET['lang'];
}else{
    $langcode = "en";
}
?>
<!doctype html>
<html lang="en" dir="<?php echo $lang[$langcode]['dir'] ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $lang [$langcode]['title']; ?> </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1><?php echo $lang [$langcode]['description']; ?> </h1>
    <a href="index.php?lang=en" class="btn btn-primary">EN</a>
    <a href="index.php?lang=fa" class="btn btn-primary">FA</a>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

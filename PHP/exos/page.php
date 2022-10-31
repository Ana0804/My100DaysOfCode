<?php

$h1 = "c'est un titre génial";
$lorem = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sit amet est tempus, aliquet ipsum. Nam auctor elementum erat quis tincidunt. Phasellus ac consequat justo, congue posuere enim. Nam ac aliquet velit. Sed ac finibus lectus. Maecenas gravida hendrerit odio, a convallis enim cursus ac. Suspendisse potenti. Aenean elementum ex ac est lobortis faucibus. In malesuada diam id massa aliquet porttitor.";
$img_path = ".img/illustrations/Night.jpg";

define("ENCODE", "UTF-8");

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="<?= ENCODE ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title><?= ($_POST["titre-page"])?></title>
</head>

<body bgcolor="<?= ($_POST["bg-color-change"]) ?>;">
    <div class="container">
        <div class="headerbtn">
        <a href="./form.php"><button><i class="bi bi-backspace"> Retourner au formulaire </i></button></a>
        </div>

        <h1 style="color:white; text-align:center;"><?= $h1 ?></h1>
        <p style="color:white; text-align:justify; margin:2em;"><?= $lorem ?></p>
        <a style="margin:2em;" href="<?= ($_POST["lien"]) ?>">Cliquez ici</a>
        <img style="width: 700px; display:block; margin-left:auto; margin-right:auto; margin-top:3em;" src="<?php echo $img_path ?>" alt="night">
    </div>
</body>

</html>
<?php 

$titre = "titre de page génial";
$bg = "#0c0518";
$h1 = "c'est un titre génial";
$lorem = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sit amet est tempus, aliquet ipsum. Nam auctor elementum erat quis tincidunt. Phasellus ac consequat justo, congue posuere enim. Nam ac aliquet velit. Sed ac finibus lectus. Maecenas gravida hendrerit odio, a convallis enim cursus ac. Suspendisse potenti. Aenean elementum ex ac est lobortis faucibus. In malesuada diam id massa aliquet porttitor.";
$lien = "https://www.lipsum.com/";
$img_path = "./img/Night.jpg";

define("ENCODE", "UTF-8");

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="<?php echo ENCODE ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titre ?></title>
</head>
<body bgcolor="<?php echo $bg ?>">
    <h1 style="color:white; text-align:center;"><?php echo $h1 ?></h1>
    <p style="color:white; text-align:justify; margin:2em;"><?php echo $lorem ?></p>
    <a style="margin:2em;" href="<?php echo $lien ?>">Lorem Ipsum</a>
    <img style="width: 700px; display:block; margin-left:auto; margin-right:auto; margin-top:3em;" src="<?php echo $img_path ?>" alt="night">
</body>
</html>


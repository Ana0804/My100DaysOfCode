<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Formulaire</title>
</head>

<body>
    <div class="container">
        <h1 style="text-align:center;">Formulaire de personnalisation</h1>
        <form action="page.php" method="post" style="text-align:center;">
            Titre de la page (onglet) : <input type="text" name="titre-page"> <br>
            Lien sur la page : <input type="url" name="lien"> <br>
            Couleur du fond : <input type="color" name="bg-color-change"> <br> <!-- Il y a un problème avec les couleurs choisies qui n'affichent pas les bonnes sur le site... -->
            <input type="submit" value="Effectuer le changement" style="margin:3em; color:green">
        </form>
    </div>
</body>

</html>
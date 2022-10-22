<?php

//exercice 1
$A = 1;
$B = $A + 3;
$A = 3;

echo ("A = " . $A . " B = " . $B);

//exercice 2
$A = 5;
$B = 3;
$C = $A + $B;
$A = 2;
$C = $B - $A;

echo('<br>' ."A = " . $A . " B = " . $B . " C = " . $C . '<br>');

//exercice 3
/* Ecrire un algorithme PHP permettant d’échanger les valeurs de deux variables A et B, et ce quel que soit
leur contenu préalable. Afficher les valeurs de A et B, avant et après. */

$A = "valeur de base A ";
$B = "valeur de base B ";

echo ('avant échange : ' . $A . ' | ' . $B);

[$A, $B] = [$B, $A]; /* Les premiers crochets séléctionnent les variables souhaitées, les deuxièmes crochets indiquent l'ordre dans lequel on veut les afficher, $A devient alors $B et vice versa -> on aurait également pu faire list($A , $B) = array($B , $A) */

echo ('<br>' . 'après échange : ' . $A . ' | ' . $B);

//exercice 4
/* Ecrire un algorithme PHP transférant à B la valeur de A, à C la valeur de B et à A la valeur de C, quels que soient le contenu préalable de ces variables. Afficher les valeurs de A, B et C, avant et après. */

$A = "valeur de A ";
$B = "valeur de B ";
$C = "valeur de C ";

echo ('<br>' . 'avant echange : ' . '$A = ' . $A . ' | ' . '$B = ' . $B . ' | ' . '$C = ' . $C);

[$A, $B, $C] = [$B, $C, $A]; 

echo ('<br>' . 'après echange : ' . '$A = ' . $A . ' | ' . '$B = ' . $B . ' | ' . '$C = ' . $C);

//exercice 5
/* Afficher le lien hypertexte « Ecrire à contact@eemi.com » avec la variable $mail = "contact@eemi.com". */

$mail = 'contact@eemi.com';

echo ('<br>' . '<a href="#">' . 'Ecrire à ' . $mail . '</a>');

//exercice 6
//Afficher la phrase en gras : « Nous sommes le mercredi 05 avril »

$string1 = "mercredi" ;
$num1 = 5 ;
$string2 = "avril" ;

echo('<br>' . 'Nous sommes le ' . $string1 . ' ' . '0' . $num1 . ' ' . $string2);

//exercice 7
//Sans utiliser le caractère ' (simple quote), afficher la phrase « Demain est un "autre" jour. ».

//exercice 8
/* Créer en PHP une page HTML avec le contenu de votre choix (un lien hypertexte au minimum). Les valeurs du titre de la page, de la couleur de fond de la page et de l’adresse du lien hypertexte seront
stockées dans des variables. L’encodage sera déterminé par une constante. */

$titre = "Ceci est un titre";
$para = "Ceci est un petit paragraphe pour remplir un peu la page";
$lorem = "Ut neque quae qui ducimus doloremque qui omnis eligendi. Ad odio esse qui voluptatibus fuga a consequatur iste 33 facere laboriosam nam doloribus facere et atque Quis qui delectus nobis. Id explicabo ratione id dignissimos quaerat rem voluptatem rerum qui neque velit ea minima molestias! 33 atque assumenda et dignissimos nesciunt qui tempore internos?";
$lien = "Si vous cliquez ici il ne se passera absoluement rien";
$photo = "./img/Night.jpg";

echo('<h1 style="text-align:center; color:#667EB8">' . $titre . '</h1>' . '<p style="text-align:center;"><strong>' . $para . '</strong></p>' . '<p style = "text-align: justify; margin: 3em;">' . $lorem . '</p>' . '<img src="' . $photo . '" style = "width: 500px; display:block; margin-left:auto; margin-right:auto;">' . '<a  href = "https://www.youtube.com/watch?v=dQw4w9WgXcQ" style = "display:block; margin-top:1em; text-align:center;">' . $lien . '</a>');

//exercice 9

//exercice 10
/* A partir des variables $newsletter (booléen), $credit (entier) et $prenom (chaîne de caractères), écrire les
tests suivants :
• Le crédit est supérieur à 50 et la personne est inscrite à la newsletter
• Le prénom est « Astrid » et le crédit est différent de 10
• Le crédit est égal à 30 ou la personne n’est pas inscrite à la newsletter */

//exercice 11
//Afficher la phrase « Nous sommes Jeudi » avec la variable $jour = "Nous sommes jeudi".

$jour = "Nous sommes jeudi";

echo(ucwords($jour));

?>
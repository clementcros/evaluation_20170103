<?php

// Le tableau $_POST['prenom'] contient les valeurs des checkbox cochées

foreach($_POST['choix'] as $valeur)

{
  echo '<!DOCTYPE html>'.

      '<html>'.

      '<head>'.

      '<meta http-equiv="content-type" content="text/html; charset=utf-8" />'.

      '<title>evaluations du 03 janvier 2017 – ville</title>'.

      '<link rel="stylesheet" type="text/css" href="reponse.css">'.

      '</head>'.

      '<body>';

   echo '<p>',"La checkbox, $valeur a été cochée<br>", '<section id=heure>',$heure =date("H:i"),'</section>','</p>';

}



/*

Si l'utilisateur coche Adriana et Candice,

cet exemple va afficher:

La checkbox Adriana a été cochée

La checkbox Candice a été cochée

*/

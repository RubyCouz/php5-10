<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 5</title>
  </head>
  <body>
    <p>
<?php
//création du tableau month
$country = array (
  02 => 'Aisne',
  59 => 'Nord',
  60 => 'Oise',
  62 => 'Pas-de-Calais',
  80 => 'Somme');
  foreach ($country as $key => $value) {
 echo 'Le département ' . $value . ' à le numéro ' . $key . '<br />';
  }
?>
    </p>
  </body>
</html>

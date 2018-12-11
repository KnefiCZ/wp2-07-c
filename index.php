<!DOCTYPE html>
<html lang="cs" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>kok</title>
  </head>
  <body>
<table>
  <?php

  for ($i=0; $i < 100 ; $i++) {
    ?><tr><?php
    for ($j=0; $j < 100 ; $j++) {
      ?><td><?php
      $s=rand(0,1);
      if ($s==1) {
        $s="O";
      }
      else {
        $s="X";
      }
       echo $s;
      ?></td><?php
    }
?></tr><?php
  }
    ?>
  </table>
  </body>
  </html>

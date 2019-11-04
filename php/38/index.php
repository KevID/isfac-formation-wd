<?php

for ($i = 1; $i < 11; $i++) {
    echo "Création du fantôme " . $i . "<br />";
}

echo "<br /><hr /><br />";

for ($i = 0; $i < 10; $i++) {
    echo "*";
}

echo "<br /><hr /><br />";

for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 10; $j++) {
        echo "*"."&nbsp;&nbsp";
    }
    echo "<br />";
}

echo "<br /><hr /><br />";

$etoiles = "";
for ($i = 1; $i <= 10; $i++) {
  $etoiles .= "*"."&nbsp;&nbsp";
}
for ($i = 1; $i <= 10; $i++) {
  echo $etoiles . "<br />";
}

echo "<br /><hr /><br />";

for ($i = 1; $i <= 10; $i++) {
    if ($i %2 === 1) {
      $color = "red";
    } else {
      $color = "green";
    }
    echo '<font color="'.$color.'">';
    for ($j = 1; $j <= 10; $j++) {
      echo "*"." &nbsp;";
    }
    echo "</font><br />";
}

echo "<br /><hr /><br />";

for ($i = 1; $i <= 10; $i++)
{
  for ($j = 1; $j <= $i; $j++)
  {
    echo "*";
  }
  echo "<br />";
}
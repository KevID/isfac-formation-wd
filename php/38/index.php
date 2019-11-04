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

$msg = "";
for ($i = 1; $i <= 10; $i++) {
  $color = ($i%2) ? "red" : "green";
  $msg .= '<p style="color: '.$color.'">';
  for ($j = 1; $j <= 10; $j++) {
    $msg .= "*";
  }
  $msg .= "</p>";
}
echo $msg;

echo "<br /><hr /><br />";

for ($i = 1; $i <= 10; $i++)
{
  for ($j = 1; $j <= $i; $j++)
  {
    echo "*";
  }
  echo "<br />";
}
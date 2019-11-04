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

echo "<br /><hr /><br />";

// Sapin de noël
echo "<div style=\"width: 100px; text-align: center; color: green\">";
$etoiles = "";
for ($i = 1; $i <= 10; $i++)
{
  $etoiles .= "*";
  echo $etoiles."<br />";
}
echo "</div>";
echo "<div style=\"width: 100px; text-align: center; color: brown\">";
for ($i = 1; $i <= 5; $i++)
{
  echo "*<br />";
}
echo "</div>";
/*


echo "<br /><hr /><br />";



$numbers = array(1,2,3,4,5,6,7,8,1,1,1,1,9);
$colors  = array("green","green","green","green","green","green","green","green", "brown","brown","brown","brown","black");
$dessin = array_combine($numbers, $colors);

var_dump($dessin);

echo "<div style=\"width: 100px; text-align: center;\">";

foreach ($dessin AS $number => $color)
{
    echo '<span style="color: '.$color.'">';
    for ($i=1; $i <= $number; $i++) {
        echo "*";
    }
    echo "</span><br />";
}
echo "</div>";
*/
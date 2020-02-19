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

echo "<br /><hr /><br />";

// Sapin de noël 2
$dessin = array();
$numbers = array(1,1,2,3,4,5,6,7,8,2,2,2,2,20);
$colors  = array("yellow","green","green","green","green","green","green","green","green", "brown","brown","brown","brown","black");
$characters  = array("*","^","^","^","^","^","^","^","^","|","|","|","|","-");
for ($i = 0; $i < count($numbers); $i++)
{
  $dessin[$i][0] = $numbers[$i];
  $dessin[$i][1] = $colors[$i];
  $dessin[$i][2] = $characters[$i];
}
echo "<div style=\"text-align: center; font-weight: bold\">\n";
foreach ($dessin AS $ligne)
{
    echo '<span style="color: '.$ligne[1].'">';
    for ($i=1; $i <= $ligne[0]; $i++) {
        echo $ligne[2];
    }
    echo "</span><br />\n";
}
echo "<span style=\"color: red\">JOYEUX NOËL !</span>\n";
echo "</div>\n";
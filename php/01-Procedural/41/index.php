<?php

$couleurs = array("red", "blue", "green");
foreach ($couleurs as $couleur)
{
  echo $couleur . "<br />\n";
}

echo "<hr />\n\n";

$couleurs = array("red", "blue", "green");
echo "<ul>\n";
foreach ($couleurs as $couleur)
{
  echo "    <li>" . $couleur . "</li>\n";
}
echo "</ul>\n\n";

echo "<hr />\n\n";

$couleurs = array("red", "blue", "green");
echo "<ul>\n";
foreach ($couleurs as $couleur)
{
  echo "    <li style=\"color: " . $couleur . "\">" . $couleur . "</li>\n";
}
echo "</ul>\n\n";

echo "<hr />\n\n";

$couleurs = array("red"=>"Rouge", "blue"=>"Bleu", "green"=>"Vert");
echo "<ul>\n";
foreach ($couleurs as $key => $couleur)
{
  echo "    <li style=\"color: " . $key . "\">" . $couleur . "</li>\n";
}
echo "</ul>\n\n";
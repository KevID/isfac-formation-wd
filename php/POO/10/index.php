<?php

spl_autoload_register('autoloader');

function autoloader($classe)
{
    require_once 'classes/' . $classe . '.php';
}

$fantome = new Fantome(['parle' => 'bouououou']);
$poltergeist = new Poltergeist(['parle' => 'wououou']);

echo $fantome->getParle();
echo $poltergeist->getParle();
echo $poltergeist->colere();

$fantome->ditBonjour();
$poltergeist->ditBonjour();

$poltergeist->parlerPlusFort();

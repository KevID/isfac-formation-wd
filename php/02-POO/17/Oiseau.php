<?php


class Oiseau implements iAnimal
{
    public function voler()
    {
        return 'Volle';
    }

    public function respirer()
    {
        return 'Respire par le bec';
    }

    public function manger()
    {
        return 'Mange avec le bec';
    }
}
<?php


class Chien implements iAnimal
{
    public function aboyer()
    {
        return 'Wouaafffff';
    }

    public function respirer()
    {
        return 'Respire par la truffe';
    }

    public function manger()
    {
        return 'Mange avec la gueule';
    }
}
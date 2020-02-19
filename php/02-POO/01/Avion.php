<?php


class Avion
{

    public function decoller()
    {
        print 'L\'avion décolle.';
    }

    public function atterrir()
    {
        print 'L\'avion atterrit.';
    }
}

$avion1 = new Avion;
$avion2 = new Avion;

$avion1->decoller();
$avion2->atterrir();
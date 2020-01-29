<?php


class Carre extends Quadrilatere
{
    /**
     * Carre constructor.
     */
    public function __construct($cote)
    {
        parent::__construct($cote, $cote);

    }
}
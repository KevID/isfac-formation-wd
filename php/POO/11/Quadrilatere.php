<?php

class Quadrilatere
{
    /**
     * @var
     */
    private $_longueur;
    private $_largeur;

    /**
     * Quadrilatere constructor.
     *
     * @param $_longueur
     * @param $_largeur
     */
    public function __construct($long, $larg)
    {
        $this->setLongueur($long);
        $this->setLargeur($larg);
    }

    /**
     * @return mixed
     */
    public function getLongueur()
    {
        return $this->_longueur;
    }

    /**
     * @param mixed $longueur
     */
    public function setLongueur($longueur)
    {
        $this->_longueur = $longueur;
    }

    /**
     * @return mixed
     */
    public function getLargeur()
    {
        return $this->_largeur;
    }

    /**
     * @param mixed $largeur
     */
    public function setLargeur($largeur)
    {
        $this->_largeur = $largeur;
    }


    /**
     * @return float|int
     */
    public function getPerimetre()
    {
        $L = $this->getLongueur();
        $l = $this->getLargeur();
        $result = (2 * $L) + (2 * $l);

        return $result;
    }


    /**
     * @return float|int
     */
    public function getAire()
    {
        $L = $this->getLongueur();
        $l = $this->getLargeur();
        $result = $L * $l;

        return $result;
    }
}
<?php

class Arme
{
    private $_nom;
    private $_attaque;

    /**
     * Arme constructor.
     *
     * @param $nom
     * @param $attaque
     */
    public function __construct($nom, $attaque)
    {
        $this->setNom($nom);
        $this->setAttaque($attaque);
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->_nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->_nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getAttaque()
    {
        return $this->_attaque;
    }

    /**
     * @param mixed $attaque
     */
    public function setAttaque($attaque)
    {
        $this->_attaque = $attaque;
    }
}
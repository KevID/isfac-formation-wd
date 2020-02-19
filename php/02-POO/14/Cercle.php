<?php


class Cercle
{
    const PI = 3.1415926535898;
    private $_rayon;

    /**
     * @return mixed
     */
    public function getRayon()
    {
        return $this->_rayon;
    }

    /**
     * @param mixed $rayon
     */
    public function setRayon($rayon)
    {
        $this->_rayon = $rayon;
    }

    public function getPerimetre($rayon)
    {
        $this->setRayon($rayon);
        $resultat = 2 * self::PI * $rayon;

        return $resultat;
    }

}
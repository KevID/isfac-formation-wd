<?php


class Calculatrice
{
    private $_resultat = null;

    private function addition($nb1, $nb2)
    {
        if (is_numeric($nb1) && is_numeric($nb2)) {
            $this->_resultat = $nb1 + $nb2;
        } else {
            $this->_resultat = null;
        }
    }

    public function setAddition($nb1, $nb2)
    {
        $this->addition($nb1, $nb2);
    }

    public function getAddition()
    {
        return $this->_resultat;
    }
}

$resultat = new Calculatrice();

$resultat->setAddition(5, 10);

print $resultat->getAddition();
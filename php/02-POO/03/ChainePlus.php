<?php


class ChainePlus
{
    private $_chaine;

    public function setChainePlus($chaine)
    {
        $this->_chaine = $chaine;
    }

    public function getChainePlus()
    {
        return $this->_chaine;
    }

    public function gras()
    {
        return '<div style="font-weight: bolder">' . $this->getChainePlus() . '</div>';
    }

    public function italique()
    {
        return '<div style="font-style: italic">' . $this->getChainePlus() . '</div>';
    }

    public function souligne()
    {
        return '<div style="text-decoration: underline">' . $this->getChainePlus() . '</div>';
    }

    public function majuscule()
    {
        return '<div>' . strtoupper($this->getChainePlus()) . '</div>';
    }
}

$chaine = new ChainePlus();
$chaine->setChainePlus('Programmation orientée objet en PHP.');
echo $chaine->gras();
echo $chaine->italique();
echo $chaine->souligne();
echo $chaine->majuscule();
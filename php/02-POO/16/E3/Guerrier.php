<?php


class Guerrier extends Personnage
{
    private $_aCheval;

    public function __construct(string $pseudo, Arme $arme, boolean $aCheval = true)
    {
        parent::__construct($pseudo, $arme);
        $this->setACheval($aCheval);
    }

    /**
     * @return mixed
     */
    public function getACheval()
    {
        return $this->_aCheval;
    }

    /**
     * @param mixed $aCheval
     */
    public function setACheval($aCheval): void
    {
        $this->_aCheval = $aCheval;
    }


}
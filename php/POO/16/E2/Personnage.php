<?php


class Personnage
{
    private $_name;
    private $_pv = 100;
    private $_arme;

    /**
     * Personnage constructor.
     *
     * @param $_name
     */
    public function __construct($name, $arme)
    {
        $this->setName($name);
        $this->setArme($arme);
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * @return int
     */
    public function getPV()
    {
        return $this->_pv;
    }

    /**
     * @param int $pv
     */
    public function setPV($pv)
    {
        $this->_pv = $pv;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->_name = $name;
    }

    /**
     * @return int
     */
    public function getArme()
    {
        return $this->_arme;
    }

    /**
     * @param int $arme
     */
    public function setArme($arme)
    {
        $this->_arme = $arme;
    }

    /**
     * @param $cible
     */
    public function frappe($cible)
    {
        $cible->setPV($cible->getPV() - $this->getArme()->getPuissance());
    }

    /**
     * @param $arme
     */
    public function changeArme($arme)
    {
        $this->getArme() !== $arme ? $this->setArme($arme) : null;
    }

    /**
     * @return string
     */
    public function getInfos()
    {

        return '<p>' . $this->getName() . ' possède ' . $this->getPV() . ' PV et une ' . $this->getArme()->getName() .
            '</p>';
    }
}
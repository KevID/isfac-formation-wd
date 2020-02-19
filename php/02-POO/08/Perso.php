<?php


class Perso
{
    private $_nom;
    private $_pv;
    private $_xp = 0;

    /**
     * Perso constructor.
     *
     * @param $nom
     * @param $pv
     */
    public function __construct($nom, $pv)
    {
        $this->setNom($nom);
        $this->setPV($pv);
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
    public function getPV()
    {
        return $this->_pv;
    }

    /**
     * @param mixed $pv
     */
    public function setPV($pv)
    {
        $this->_pv = $pv;
    }

    /**
     * @return mixed
     */
    public function getXP()
    {
        return $this->_xp;
    }

    /**
     * @param mixed $xp
     */
    public function setXP($xp)
    {
        $this->_xp = $xp;
    }


    /**
     * @return bool
     */
    private function isAlive()
    {
        return $this->getPV() > 0;
    }

    /**
     *
     */
    public function info()
    {
        echo $this->getNom() . ' a ' . $this->getPV() . ' PV et ' . $this->getXP() . ' XP<br>';
    }

    /**
     * @param $combien
     */
    private function enleverPV($combien)
    {
        $this->setPV($this->getPV() - $combien);
        if ($this->getPV() < 0) {
            $this->setPV(0);
        }
    }

    /**
     *
     */
    private function gagnerXP()
    {
        $this->setXP($this->getXP() + 1);
    }

    /**
     * @param $cible
     * @param $combien
     */
    public function attaquer($cible, $combien)
    {
        if ($cible->isAlive()) {
            $cible->enleverPV($combien);
            $this->gagnerXP();
        }
    }

}

<?php


class Prestation
{
    private $_idPrestation;
    private $_nomPrestation;

    public function __construct(Array $donnees)
    {
        $this->hydrate($donnees);
    }

    /**
     * @return mixed
     */
    public function getIdPrestation()
    {
        return $this->_idPrestation;
    }

    /**
     * @param mixed $idPrestation
     */
    public function setIdPrestation($idPrestation): void
    {
        $this->_idPrestation = $idPrestation;
    }

    /**
     * @return mixed
     */
    public function getNomPrestation()
    {
        return $this->_nomPrestation;
    }

    /**
     * @param mixed $nomPrestation
     */
    public function setNomPrestation($nomPrestation): void
    {
        $this->_nomPrestation = $nomPrestation;
    }

    private function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value) {
            $method = 'set' . ucfirst($key);

            if (method_exists($this, $method)) {
                // On appelle le setter.
                $this->$method($value);
            }
        }
    }
    
}
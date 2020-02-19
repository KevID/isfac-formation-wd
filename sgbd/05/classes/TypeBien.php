<?php


class TypeBien
{
    private $_idTypeBien;
    private $_nomTypeBien;

    public function __construct(Array $donnees)
    {
        $this->hydrate($donnees);
    }

    /**
     * @return mixed
     */
    public function getIdTypeBien()
    {
        return $this->_idTypeBien;
    }

    /**
     * @param mixed $idTypeBien
     */
    public function setIdTypeBien($idTypeBien): void
    {
        $this->_idTypeBien = $idTypeBien;
    }

    /**
     * @return mixed
     */
    public function getNomTypeBien()
    {
        return $this->_nomTypeBien;
    }

    /**
     * @param mixed $nomTypeBien
     */
    public function setNomTypeBien($nomTypeBien): void
    {
        $this->_nomTypeBien = $nomTypeBien;
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
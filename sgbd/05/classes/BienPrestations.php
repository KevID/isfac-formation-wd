<?php


class BienPrestations
{
    private $_idBien;
    private $_idPrestation;
    private $_nombre;

    public function __construct(Array $donnees)
    {
        $this->hydrate($donnees);
    }

    /**
     * @return mixed
     */
    public function getIdBien()
    {
        return $this->_idBien;
    }

    /**
     * @param mixed $idBien
     */
    public function setIdBien($idBien): void
    {
        $this->_idBien = $idBien;
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
    public function getNombre()
    {
        return $this->_nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre): void
    {
        $this->_nombre = $nombre;
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
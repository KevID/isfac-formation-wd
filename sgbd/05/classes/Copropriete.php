<?php


class Copropriete
{
    private $_idBien;
    private $_idClient;
    private $_parts;

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
    public function getIdClient()
    {
        return $this->_idClient;
    }

    /**
     * @param mixed $idClient
     */
    public function setIdClient($idClient): void
    {
        $this->_idClient = $idClient;
    }

    /**
     * @return mixed
     */
    public function getParts()
    {
        return $this->_parts;
    }

    /**
     * @param mixed $parts
     */
    public function setParts($parts): void
    {
        $this->_parts = $parts;
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
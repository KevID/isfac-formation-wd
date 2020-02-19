<?php


class Agence
{
    private $_idAgence;
    private $_nomAgence;
    private $_adresseAgence;
    private $_cpAgence;
    private $_villeAgence;
    private $_telAgence;
    private $_mailAgence;

    public function __construct(Array $donnees)
    {
        $this->hydrate($donnees);
    }

    /**
     * @return mixed
     */
    public function getIdAgence()
    {
        return $this->_idAgence;
    }

    /**
     * @param mixed $idAgence
     */
    public function setIdAgence($idAgence): void
    {
        $this->_idAgence = $idAgence;
    }

    /**
     * @return mixed
     */
    public function getNomAgence()
    {
        return $this->_nomAgence;
    }

    /**
     * @param mixed $nomAgence
     */
    public function setNomAgence($nomAgence): void
    {
        $this->_nomAgence = $nomAgence;
    }

    /**
     * @return mixed
     */
    public function getAdresseAgence()
    {
        return $this->_adresseAgence;
    }

    /**
     * @param mixed $adresseAgence
     */
    public function setAdresseAgence($adresseAgence): void
    {
        $this->_adresseAgence = $adresseAgence;
    }

    /**
     * @return mixed
     */
    public function getCpAgence()
    {
        return $this->_cpAgence;
    }

    /**
     * @param mixed $cpAgence
     */
    public function setCpAgence($cpAgence): void
    {
        $this->_cpAgence = $cpAgence;
    }

    /**
     * @return mixed
     */
    public function getVilleAgence()
    {
        return $this->_villeAgence;
    }

    /**
     * @param mixed $villeAgence
     */
    public function setVilleAgence($villeAgence): void
    {
        $this->_villeAgence = $villeAgence;
    }

    /**
     * @return mixed
     */
    public function getTelAgence()
    {
        return $this->_telAgence;
    }

    /**
     * @param mixed $telAgence
     */
    public function setTelAgence($telAgence): void
    {
        $this->_telAgence = $telAgence;
    }

    /**
     * @return mixed
     */
    public function getMailAgence()
    {
        return $this->_mailAgence;
    }

    /**
     * @param mixed $mailAgence
     */
    public function setMailAgence($mailAgence): void
    {
        $this->_mailAgence = $mailAgence;
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
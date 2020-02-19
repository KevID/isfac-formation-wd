<?php


class Proprietaire
{
    private $_idClient;
    private $_nomClient;
    private $_prenomClient;
    private $_adresseClient;
    private $_cpClient;
    private $_villeClient;
    private $_telClient;
    private $_mailClient;

    public function __construct(Array $donnees)
    {
        $this->hydrate($donnees);
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
    public function getNomClient()
    {
        return $this->_nomClient;
    }

    /**
     * @param mixed $nomClient
     */
    public function setNomClient($nomClient): void
    {
        $this->_nomClient = $nomClient;
    }

    /**
     * @return mixed
     */
    public function getPrenomClient()
    {
        return $this->_prenomClient;
    }

    /**
     * @param mixed $prenomClient
     */
    public function setPrenomClient($prenomClient): void
    {
        $this->_prenomClient = $prenomClient;
    }

    /**
     * @return mixed
     */
    public function getAdresseClient()
    {
        return $this->_adresseClient;
    }

    /**
     * @param mixed $adresseClient
     */
    public function setAdresseClient($adresseClient): void
    {
        $this->_adresseClient = $adresseClient;
    }

    /**
     * @return mixed
     */
    public function getCpClient()
    {
        return $this->_cpClient;
    }

    /**
     * @param mixed $cpClient
     */
    public function setCpClient($cpClient): void
    {
        $this->_cpClient = $cpClient;
    }

    /**
     * @return mixed
     */
    public function getVilleClient()
    {
        return $this->_villeClient;
    }

    /**
     * @param mixed $villeClient
     */
    public function setVilleClient($villeClient): void
    {
        $this->_villeClient = $villeClient;
    }

    /**
     * @return mixed
     */
    public function getTelClient()
    {
        return $this->_telClient;
    }

    /**
     * @param mixed $telClient
     */
    public function setTelClient($telClient): void
    {
        $this->_telClient = $telClient;
    }

    /**
     * @return mixed
     */
    public function getMailClient()
    {
        return $this->_mailClient;
    }

    /**
     * @param mixed $mailClient
     */
    public function setMailClient($mailClient): void
    {
        $this->_mailClient = $mailClient;
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
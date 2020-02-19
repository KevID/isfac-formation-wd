<?php

class Bien
{

    private $_idBien;
    private $_idAgence;
    private $_idClient;
    private $_idTypeBien;
    private $_prixBien;
    private $_designationBien;
    private $_villeBien;
    private $_adresseBien;
    private $_cpBien;
    private $_nombrePieces;
    private $_surfaceBien;
    private $_surfaceTerrain;
    private $_chauffage;
    private $_taxeFonciere;
    private $_charges;
    private $_commentaires;
    private $_prestations;

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
    public function getPrixBien()
    {
        return $this->_prixBien;
    }

    /**
     * @param mixed $prixBien
     */
    public function setPrixBien($prixBien): void
    {
        $this->_prixBien = $prixBien;
    }

    /**
     * @return mixed
     */
    public function getDesignationBien()
    {
        return $this->_designationBien;
    }

    /**
     * @param mixed $designationBien
     */
    public function setDesignationBien($designationBien): void
    {
        $this->_designationBien = $designationBien;
    }

    /**
     * @return mixed
     */
    public function getVilleBien()
    {
        return $this->_villeBien;
    }

    /**
     * @param mixed $villeBien
     */
    public function setVilleBien($villeBien): void
    {
        $this->_villeBien = $villeBien;
    }

    /**
     * @return mixed
     */
    public function getAdresseBien()
    {
        return $this->_adresseBien;
    }

    /**
     * @param mixed $adresseBien
     */
    public function setAdresseBien($adresseBien): void
    {
        $this->_adresseBien = $adresseBien;
    }

    /**
     * @return mixed
     */
    public function getCpBien()
    {
        return $this->_cpBien;
    }

    /**
     * @param mixed $cpBien
     */
    public function setCpBien($cpBien): void
    {
        $this->_cpBien = $cpBien;
    }

    /**
     * @return mixed
     */
    public function getNombrePieces()
    {
        return $this->_nombrePieces;
    }

    /**
     * @param mixed $nombrePieces
     */
    public function setNombrePieces($nombrePieces): void
    {
        $this->_nombrePieces = $nombrePieces;
    }

    /**
     * @return mixed
     */
    public function getSurfaceBien()
    {
        return $this->_surfaceBien;
    }

    /**
     * @param mixed $surfaceBien
     */
    public function setSurfaceBien($surfaceBien): void
    {
        $this->_surfaceBien = $surfaceBien;
    }

    /**
     * @return mixed
     */
    public function getSurfaceTerrain()
    {
        return $this->_surfaceTerrain;
    }

    /**
     * @param mixed $surfaceTerrain
     */
    public function setSurfaceTerrain($surfaceTerrain): void
    {
        $this->_surfaceTerrain = $surfaceTerrain;
    }

    /**
     * @return mixed
     */
    public function getChauffage()
    {
        return $this->_chauffage;
    }

    /**
     * @param mixed $chauffage
     */
    public function setChauffage($chauffage): void
    {
        $this->_chauffage = $chauffage;
    }

    /**
     * @return mixed
     */
    public function getTaxeFonciere()
    {
        return $this->_taxeFonciere;
    }

    /**
     * @param mixed $taxeFonciere
     */
    public function setTaxeFonciere($taxeFonciere): void
    {
        $this->_taxeFonciere = $taxeFonciere;
    }

    /**
     * @return mixed
     */
    public function getCharges()
    {
        return $this->_charges;
    }

    /**
     * @param mixed $charges
     */
    public function setCharges($charges): void
    {
        $this->_charges = $charges;
    }

    /**
     * @return mixed
     */
    public function getCommentaires()
    {
        return $this->_commentaires;
    }

    /**
     * @param mixed $commentaires
     */
    public function setCommentaires($commentaires): void
    {
        $this->_commentaires = $commentaires;
    }

    /**
     * @return mixed
     */
    public function getPrestations()
    {
        return $this->_prestations;
    }

    /**
     * @param mixed $prestations
     */
    public function setPrestations($prestations): void
    {
        $this->_prestations = $prestations;
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
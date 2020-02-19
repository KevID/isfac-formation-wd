<?php


class CoproprieteManager
{
    /**
     * @var
     */
    private $_db; // Instance de PDO

    /**
     * FantomeManager constructor.
     *
     * @param $db
     */
    public function __construct($db)
    {
        $this->setDB($db);
    }

    /**
     * @param PDO $db
     */
    private function setDB(PDO $db)
    {
        $this->_db = $db;
    }

    /**
     * @return mixed
     */
    public function getDB()
    {
        return $this->_db;
    }

    /**
     * @param $id
     *
     * @return Copropriete|null
     */
    public function getProprietairesFromBien($id)
    {
        $values = null;

        if (!empty($id)) {

            $q = $this->getDB()->prepare('SELECT * FROM copropriete WHERE idBien = :id ORDER BY parts DESC');
            $q->bindValue(':id', $id, PDO::PARAM_STR);
            $q->execute();

            while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
                $values[] = new Copropriete($donnees);
            }
        }

        return $values;
    }
}
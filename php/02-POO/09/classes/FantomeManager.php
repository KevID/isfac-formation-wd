<?php


class FantomeManager
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
        $this->setDb($db);
    }

    /**
     * @param PDO $db
     */
    private function setDb(PDO $db)
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
     * @param Fantome $fantome
     */
    public function add(Fantome $fantome)
    {
        $q = $this->getDB()->prepare('INSERT INTO fantomes (name, color, velocity, pv) VALUES (:name, :color, :velocity, :pv)');

        $q->bindValue(':name', $fantome->getName(), PDO::PARAM_STR);
        $q->bindValue(':color', $fantome->getColor(), PDO::PARAM_STR);
        $q->bindValue(':velocity', $fantome->getVelocity(), PDO::PARAM_INT);
        $q->bindValue(':pv', $fantome->getPv(), PDO::PARAM_INT);

        $q->execute();

        $fantome->setId($this->_db->lastInsertId());
    }

    /**
     * @param Fantome $fantome
     */
    public function update(Fantome $fantome)
    {
        $q = $this->getDB()->prepare('UPDATE fantomes SET name = :name, color = :color, velocity = :velocity, pv = :pv WHERE id = :id');

        $q->bindValue(':name', $fantome->getName(), PDO::PARAM_STR);
        $q->bindValue(':color', $fantome->getColor(), PDO::PARAM_STR);
        $q->bindValue(':velocity', $fantome->getVelocity(), PDO::PARAM_INT);
        $q->bindValue(':pv', $fantome->getPv(), PDO::PARAM_INT);
        $q->bindValue(':id', $fantome->getId(), PDO::PARAM_INT);

        $q->execute();
    }

    /**
     * @param $id
     */
    public function delete($id)
    {
        $id = (int)$id;

        if ($id > 0) {
            $q = $this->getDB()->prepare('DELETE FROM fantomes WHERE id = :id');
            $q->bindValue(':id', $id, PDO::PARAM_INT);
            $q->execute();
        }
    }

    /**
     * @param $id
     *
     * @return Fantome|null
     */
    public function get($id)
    {
        $id = (int)$id;
        $fantome = null;

        if ($id > 0) {

            $q = $this->getDB()->query('SELECT id, name, color, velocity, pv FROM fantomes ORDER BY name');

            $donnees = $q->fetch(PDO::FETCH_ASSOC);
            $fantome = new Fantome($donnees);
        }

        return $fantome;
    }

    /**
     * @return array
     */
    public function getList()
    {
        $q = $this->getDB()->query('SELECT id, name, color, velocity, pv FROM fantomes ORDER BY name');

        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            $fantomes[] = new Fantome($donnees);
        }

        return $fantomes;
    }
}
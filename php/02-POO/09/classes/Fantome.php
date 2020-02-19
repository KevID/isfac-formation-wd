<?php


class Fantome
{
    private $_id;
    private $_name;
    private $_color;
    private $_velocity = 1;
    private $_pv = 10;

    public function __construct(Array $donnees)
    {
        $this->hydrate($donnees);
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->_id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->_name = $name;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->_color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->_color = $color;
    }

    /**
     * @return int
     */
    public function getVelocity()
    {
        return $this->_velocity;
    }

    /**
     * @param int $velocity
     */
    public function setVelocity($velocity)
    {
        $this->_velocity = $velocity;
    }

    /**
     * @return int
     */
    public function getPv()
    {
        return $this->_pv;
    }

    /**
     * @param int $pv
     */
    public function setPv($pv)
    {
        $this->_pv = $pv;
    }

    private function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value) {
            $method = 'set' . ucfirst($key);

            if (method_exists($this, $method)) {
                // On appelle le setter.
                $this->$method($value);
            } else {
                echo 'La méthode ' . $method . ' n\'existe pas';
            }
        }
    }
}
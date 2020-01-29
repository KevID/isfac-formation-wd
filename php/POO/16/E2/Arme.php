<?php


class Arme
{
    private $_name;
    private $_puissance;

    /**
     * Arme constructor.
     *
     * @param $name
     * @param $puissance
     */
    public function __construct($name, $puissance)
    {
        $this->setName($name);
        $this->setPuissance($puissance);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->_name = $name;
    }

    /**
     * @return int
     */
    public function getPuissance()
    {
        return $this->_puissance;
    }

    /**
     * @param int $puissance
     */
    public function setPuissance($puissance)
    {
        $this->_puissance = $puissance;
    }


}
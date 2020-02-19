<?php


class Ballon
{
    private $_color;
    private $_name;

    /**
     * Ballon constructor.
     *
     * @param $color
     * @param $name
     */
    public function __construct($color, $name)
    {
        $this->setColor($color);
        $this->setName($name);
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

    public function getInfos()
    {
        return '<p>' . $this->getName() . ' est de couleur ' . $this->getColor() . '<p>';
    }

    public function changeColor($cible, $color)
    {
        $cible->setColor($color);
    }

}
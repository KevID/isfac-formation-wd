<?php


class Fantome
{
    private $_name;
    private $_color;
    private $_velocity = 1;
    private $_pv = 10;

    /**
     * Fantome constructor.
     *
     * @param $name
     * @param $color
     */
    public function __construct($name, $color)
    {
        $this->setName($name);
        $this->setColor($color);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * @param string name
     */
    public function setName($name)
    {
        $this->_name = $name;
    }

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->_color;
    }

    /**
     * @param string $Color
     */
    public function setColor($Color)
    {
        $this->_color = $Color;
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
        if ((int)$velocity >= 1 && (int)$velocity <= 3) {
            $this->_velocity = $velocity;
        }
    }

    /**
     * @return int
     */
    public
    function getPV()
    {
        return $this->_pv;
    }

    /**
     * @param int $pv
     */
    public
    function setPV($pv)
    {
        $this->_pv = (int)$pv;
    }

    /**
     * @param int $pv
     */
    public
    function manger($pv)
    {
        $this->setPV($this->getPV() + (int)$pv);
    }

    /**
     * @param int $pv
     */
    public
    function diminuer($pv)
    {
        if ($this->getPV() - (int)$pv > 0) {
            $this->setPV($this->getPV() - (int)$pv);
        } else {
            $this->setPV(0);
        }
        $this->getDead();

        return $this;
    }

    private
    function getDead()
    {
        if ($this->getPV() === 0) {
            echo $this->getName() . " est mort.";
        }
    }

    public function info()
    {
        echo $this->getName() . ' a ' . $this->getPV() . ' PV.';
    }
}

$fantome1 = new Fantome('Clyde', 'jaune');
$fantome2 = new Fantome('Dolly', 'rose');
$fantome2->manger(10);
$fantome2->setVelocity(2);
$fantome1->diminuer(5);
$fantome1->diminuer(10)->info();

var_dump($fantome1, $fantome2);
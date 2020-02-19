<?php


class Voiture
{
    private $_name;
    private $_immat;

    public function __construct($name, $immat)
    {
        $this->_name = $name;
        $this->_immat = $immat;
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
    public function setname($name)
    {
        $this->_name = $name;
    }

    /**
     * @return mixed
     */
    public function getImmat()
    {
        return $this->_immat;
    }

    /**
     * @param mixed $immat
     */
    public function setimmat($immat)
    {
        $this->_immat = $immat;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return date('Y') - $this->getImmat();
    }

}

$voiture1 = new Voiture('jaguar', 1970);
echo '<div>Une ' . $voiture1->getName() . ' de ' . $voiture1->getImmat() . ' a ' . $voiture1->getAge() . ' ans.</div>';

$voiture2 = new Voiture('308', 2010);
echo '<div>Une ' . $voiture2->getName() . ' de ' . $voiture2->getImmat() . ' a ' . $voiture2->getAge() . ' ans.</div>';
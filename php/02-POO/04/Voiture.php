<?php


class Voiture
{
    private $_name;
    private $_immat;

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
    public function getImmat()
    {
        return $this->_immat;
    }

    /**
     * @param mixed $immat
     */
    public function setImmat($immat)
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

$voiture1 = new Voiture;
$voiture1->setName('jaguar');
$voiture1->setImmat('1970');
echo '<div>Une ' . $voiture1->getName() . ' de ' . $voiture1->getImmat() . ' a ' . $voiture1->getAge() . ' ans.</div>';

$voiture2 = new Voiture;
$voiture2->setName('308');
$voiture2->setImmat('2010');
echo '<div>Une ' . $voiture2->getName() . ' de ' . $voiture2->getImmat() . ' a ' . $voiture2->getAge() . ' ans.</div>';
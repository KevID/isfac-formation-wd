<?php


class Compte
{
    private $_solde = 0;
    private $_name;

    /**
     * Compte constructor.
     *
     * @param $name
     */
    public function __construct($name)
    {
        $this->setName($name);
    }

    /**
     * @return int
     */
    public function getSolde()
    {
        return $this->_solde;
    }

    /**
     * @param int $solde
     */
    public function setSolde($solde)
    {
        $this->_solde = $solde;
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
     * @param float $price
     */
    public function depot($price)
    {
        $this->setSolde($this->getSolde() + (int)$price);
    }

    /**
     * @param float $price
     */
    public function retrait($price)
    {
        $this->setSolde($this->getSolde() - (int)$price);
    }

    /**
     * @return mixed
     */
    public function affiche()
    {
        return $this->getSolde();
    }

    /**
     * @param mixed $compteCible
     * @param int   $price
     */
    public function virer($compteCible, $price)
    {
        $price = (int)$price;
        if ($price > 0) {
            $this->retrait($price);
            $compteCible->depot($price);
        }
    }
}

$compte1 = new Compte('John');
$compte2 = new Compte('Marylin');

$compte1->depot(500);
$compte2->depot(1000);
$compte2->retrait(10);

echo $compte1->affiche() . '<br>';
echo $compte2->affiche() . '<br>';

$compte1->virer($compte2, 75);


var_dump($compte1, $compte2);
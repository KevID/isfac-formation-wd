<?php


class Fantome
{

    private $_parole;

    public function __construct($donnees)
    {
        $this->hydrate($donnees);
    }

    /**
     * @return mixed
     */
    public function getParle()
    {
        return $this->_parole;
    }

    /**
     * @param mixed $parole
     */
    public function setParle($parole)
    {
        $this->_parole = $parole;
    }

    public function ditBonjour()
    {
        echo 'Bonjour, Je suis le fantom';
    }

    public function parle()
    {
        echo $this->getParle();
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
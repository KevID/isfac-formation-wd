<?php


class Personnage
{
    const PERTE_MANA = 25;

    private static $_personnages = [];

    private $_pseudo;
    private $_niveau = 1;
    private $_vie = 100;
    private $_mana = 100;
    private $_arme;

    /**
     * Personnage constructor.
     *
     * @param string $pseudo
     * @param object $arme
     */
    public function __construct(string $pseudo, object $arme)
    {
        $this->setPseudo($pseudo);
        $this->setArme($arme);
        self::setPersonnages($this);
    }

    /**
     * @return array
     */
    public static function getPersonnages(): array
    {
        return self::$_personnages;
    }

    /**
     * @param Personnage $personnages
     */
    public static function setPersonnages(Personnage $personnage): void
    {
        self::$_personnages[] = $personnage;
    }

    /**
     * @return mixed
     */
    public function getPseudo()
    {
        return $this->_pseudo;
    }

    /**
     * @param mixed $pseudo
     */
    public function setPseudo($pseudo)
    {
        $this->_pseudo = $pseudo;
    }

    /**
     * @return int
     */
    public function getNiveau()
    {
        return $this->_niveau;
    }

    /**
     * @param int $niveau
     */
    public function setNiveau($niveau)
    {
        $this->_niveau = $niveau;
    }

    /**
     * @return int
     */
    public function getVie()
    {
        return $this->_vie;
    }

    /**
     * @param int $vie
     */
    public function setVie($vie)
    {
        $this->_vie = $vie;
    }

    /**
     * @return mixed
     */
    public function getMana()
    {
        return $this->_mana;
    }

    /**
     * @param mixed $mana
     */
    public function setMana($mana)
    {
        $this->_mana = $mana;
    }

    /**
     * @return mixed
     */
    public function getArme()
    {
        return $this->_arme;
    }

    /**
     * @param mixed $arme
     */
    public function setArme(Arme $arme)
    {
        $this->_arme = $arme;
    }

    public function boirePotionDeVie(int $qty)
    {
        $this->setVie($this->getVie() + $qty);
    }

    public function recevoirDegats(int $qty)
    {
        $vieRestant = $this->getVie() > $qty ? $this->getVie() - $qty : 0;
        $this->setVie($vieRestant);
    }

    public function diminuerMana(int $qty)
    {
        $manaRestant = $this->getMana() > $qty ? $this->getMana() - $qty : 0;
        $this->setMana($manaRestant);
    }

    public function attaquer(Personnage $cible)
    {
        $qty = $this->getArme()->getAttaque();

        if ($this->getMana() >= self::PERTE_MANA) {
            $cible->recevoirDegats($qty);
            $this->diminuerMana(self::PERTE_MANA);
        }
    }

    public function vivant()
    {
        return $this->getVie() > 0;
    }

    public function changerArme(Arme $arme)
    {
        $this->getArme() !== $arme ? $this->setArme($arme) : null;
    }

    public static function infos(): string
    {
        $txt = '';
        foreach (self::getPersonnages() as $perso) {
            if ($perso->vivant()) {
                $txt .= '<p>' . $perso->getPseudo() . ' a ' . $perso->getVie() . ' PV et ' . $perso->getMana() . ' de Mana</p>';
            } else {
                $txt .= '<p>' . $perso->getPseudo() . ' est mort !</p>';
            }
        }

        //var_dump($personnages);
        return $txt;
    }
}
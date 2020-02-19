<?php


class Magicien extends Personnage
{
    const QTY_SORTILEGE = 40;

    public function __construct(string $pseudo, Arme $arme)
    {
        if ($arme->getNom() === 'bâton') {
            parent::__construct($pseudo, $arme);
        } else {
            throw new Exception($pseudo . ' est un Magicien et ne peut avoir qu\'un bâton pour arme');
        }

    }

    public function lancerSortilege(Personnage $cible)
    {
        $cible->diminuerMana(self::QTY_SORTILEGE);
    }
}
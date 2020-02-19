<?php


class Poltergeist extends Fantome
{

    public function colere()
    {
        return 'lancement d\'assiette';
    }

    public function ditBonjour()
    {
        echo 'Bonsoir';
    }

    public function parlerPlusFort()
    {
        $this->setParle('Je parle');
        parent::parle();
        echo '<h1>JE CRIE</h1>';
    }


    public function parle()
    {
        echo 'coucou';
    }

}
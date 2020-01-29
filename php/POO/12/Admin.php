<?php


class Admin extends User
{
    public function ditBonjour()
    {
        return '<p>Bonjour Admin, ' . $this->_username . '</p>';
    }
}
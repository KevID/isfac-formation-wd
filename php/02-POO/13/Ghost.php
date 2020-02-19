<?php


class Ghost
{
    private static $_nb;

    /**
     * Ghost constructor.
     */
    public function __construct()
    {
        self::setNb(self::getNb() + 1);
    }

    /**
     * Ghost destructor.
     */
    public function __destruct()
    {
        self::setNb(self::getNb() - 1);
    }


    /**
     * @return int
     */
    public static function getNb()
    {
        return self::$_nb;
    }

    /**
     * @param int $nb
     */
    public static function setNb($nb)
    {
        self::$_nb = $nb;
    }
}
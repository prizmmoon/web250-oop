<?php

class Bird
{
    public static $instanceCount = 0;

    protected $habitat;
    protected $food;
    protected static $nesting = "tree";
    protected $conservation;
    protected static $song = "chirp";
    protected static $flying = "yes";
    protected static $eggNum = "one massive egg";

    protected function canFly()
    {
        $flyingString = static::$flying == "yes" ? " bird can fly" : "cannot fly and is stuck on the ground";

        return $flyingString;
    }

    public static function create()
    {
        $className = get_called_class();
        $object = new $className;

        static::$instanceCount++;
        return $object;
    }
}

class YellowBelliedFlyCatcher extends Bird
{
    private $name = "yellow-bellied flycatcher";
    private $diet = "mostly insects.";
    protected static $song = "flat chilk";
    protected static $eggNum = "3-4, sometimes 5";
}

class Kiwi extends Bird
{
    private $name = "kiwi";
    private $diet = "omnivorous";
    protected static $flying = "no";
}

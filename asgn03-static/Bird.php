<?php

class Bird
{
    public static $instanceCount = 0;

    public $habitat;
    public $food;
    public $nesting = "tree";
    public $conservation;
    public $song = "chirp";
    public static $flying = "yes";
    public static $eggNum = "one massive egg";

    public function canFly()
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
    public $name = "yellow-bellied flycatcher";
    public $diet = "mostly insects.";
    public $song = "flat chilk";
    public static $eggNum = "3-4, sometimes 5";
}

class Kiwi extends Bird
{
    public $name = "kiwi";
    public $diet = "omnivorous";
    public static $flying = "no";
}

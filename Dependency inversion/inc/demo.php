<?php

abstract class Bird
{
    abstract function eat();
    abstract function sleep();
    abstract function fly();
}

class BirdManager
{
    function maintainBird(Bird $bird)
    {
        $bird->eat();
        $bird->sleep();
        $bird->fly();
    }
}

class Sparrow extends Bird
{
    function eat()
    {
        echo "Sparrow is eating.\n";
    }

    function sleep()
    {
        echo "Sparrow is sleeping.\n";
    }

    function fly()
    {
        echo "Sparrow is flying.\n";
    }
}



$sparrow = new Sparrow();
$birdManager = new BirdManager();
$birdManager->maintainBird($sparrow);

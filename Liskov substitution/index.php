<?php include "inc/header.php"; ?>

<div class="para">
    <?php
    // include "inc/demo.php";
    abstract class Bird
    {
        abstract function eat();
        abstract function sleep();
    }

    abstract class WalkingBird extends Bird
    {
        abstract function walk();
    }
    abstract class FlyingBird extends Bird
    {
        abstract function fly();
    }




    class BirdManager
    {
        function maintainBird(WalkingBird $bird)
        {
            $bird->eat();
            $bird->sleep();
            $bird->walk();
        }
    }


    class Eagle extends FlyingBird
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

    class Penguin extends WalkingBird
    {
        function eat()
        {
            echo "Sparrow is eating.\n";
        }

        function sleep()
        {
            echo "Sparrow is sleeping.\n";
        }

        function walk()
        {
            echo "Sparrow is flying.\n";
        }
    }

    $penguin = new Penguin();
    $birdManager = new BirdManager();
    $birdManager->maintainBird($penguin);


    ?>
</div>
<?php include "inc/footer.php"; ?>
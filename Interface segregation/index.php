<?php include "inc/header.php" ?>

<?php
    interface Vehicle{
        function getMileage();
        function getName();
        function getPrice();
    }

    interface TwoWheels{
        
    }

    interface ThreeWheels{

    }

    interface SixWheels{

    }

    class MotorCycle implements Vehicle, TwoWheels{

    }

    class Track implements Vehicle, SixWheels{

    }
    
 

?>

<?php include "inc/footer.php"; ?>
<?php include "inc/header.php" ?>

As the name suggests, this principle states that each class should have one responsibility, one single purpose. This means that a class will do only one job, which leads us to conclude it should have only one reason to change.

We don’t want objects that know too much and have unrelated behavior. These classes are harder to maintain. For example, if we have a class that we change a lot, and for different reasons, then this class should be broken down into more classes, each handling a single concern. Surely, if an error occurs, it will be easier to find.
<hr>
<b>SRP = Single Responsibility Principle</b>
    <h1>S – Single Responsibility Principle</h1>


    <?php
    class Student
    {
        function GradeCalculator()
        {
        }
        function Attendance()
        {
        }
        function StudentPayment()
        {
        }
    }

    //* This is single  design  pattern 

    class GradeCalculator
    {
    }

    class Attendance
    {
    }

    class StudentPayment
    {
    }




    ?>


    <?php include "inc/footer.php"; ?>
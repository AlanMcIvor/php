<?php 
include 'partials/header.php';
include 'partials/navigation.php';
include 'partials/functions.php';

$age = 25;
$name = "Sarah";
$isStudent = true;
$score = 80;
$num = 4;

// echo $age;
?>

<p>
    Hi There <?= $name ?>, you are <?= $age ?>
</p>

<p>
    <?php 
        if($isStudent == true) : ?>
        You are currently a student.
    <?php else : ?>
        You need to enroll.
    <?php endif ?>
</p>

<p>
    <?php 
        if ($score >= 70) : ?>
        Congratulations, you passed.
    <?php else : ?>
            Oops, you did not pass this time.
    <?php endif ?>
</p>

<p>
    <?php 
        if ($num % 2 == 0) : ?>
        The number is even
    <?php else : ?>
            The number is odd
    <?php endif ?>
</p>



<?php
include 'partials/footer.php';
?>


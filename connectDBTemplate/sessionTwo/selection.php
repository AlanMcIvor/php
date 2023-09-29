<?php 
    include 'partials/header.php';
    $age = 21;

    // if($age > 20){
    //     echo "You are ancient";
    // }else {
    //     echo 'You are less ancient';
    // }
session_start()
?>

<main>

        <p>Hi my name is <?= $_SESSION['name'] ?> and I am</p>
            <?php 
            if($age < 20) : ?>
            <p>Young</p>
            <?php else :?> 
                <p>Ancient</p>
                <?php endif ?>

        </p>

</main>

<?php include 'partials/footer.php';?>



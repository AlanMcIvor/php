<?php 
    include 'partials/header.php';

    session_start();

?>

<main>
<p> <?= $_SESSION["email"] ?></p>
<p> <?= $_SESSION["name"] ?></p>


</main>

<?php include 'partials/footer.php';?>



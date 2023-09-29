<?php 
    include 'partials/header.php';

    session_start();

?>

<main>
<p>
    this website belongs to <?= $_SESSION["email"] ?>
</p>


</main>

<?php include 'partials/footer.php';?>



<?php 
    include 'partials/header.php';

    session_start();

?>

<main>
<p>
    this website belongs to <?= $_SESSION["name"] ?>
</p>

<P>Hello</P>

</main>

<?php include 'partials/footer.php';?>



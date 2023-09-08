<?php 
    include 'partials/header.php';

    session_start();
    $_SESSION["name"] = "Alan";
    $_SESSION["email"] = "20034584@myclyde.ac.uk";
?>

<main>
<p>
    this website belongs to <?= $pageTitle ?>
</p>


</main>

<?php include 'partials/footer.php';?>



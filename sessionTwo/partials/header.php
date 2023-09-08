<?php 
    define('Root_Directory', 'http://localhost/AlanMcIvorPHP/sessionTwo/');
    $pageTitle = "Php Session two"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= Root_directory?>style.css">    
    <title><?= $pageTitle ?></title>

</head>

<body>

<nav>
    <ul>
        <li><a href="<?= Root_Directory ?>">Home Page</a></li>
        <li><a href="<?= Root_Directory ?>page2.php">Page 2</a></li>
        <li><a href="<?= Root_Directory ?>page3.php">Page 3</a></li>
        <li><a href="<?= Root_Directory ?>page4.php">Page 4</a></li>
    </ul>
</nav>


<?php session_start();
// check whether the session array is empty.
if (empty($_SESSION)) {
    header('Location: login.php?ERROR="loginFirst"');
} ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .myRecepies 
        {
        background-color: #F3F3F3;
        padding: 10px;
        margin: 10px;
        }

        .recepieList {
            display: grid;
            grid-template-columns: 1fr;
        }
        

    </style>
</head>
<body>
    <div class="container">
        <?php require 'index.php' ?>
        <section class = 'recepieList'>       
            <?php require 'getRecipes.php'; ?>
        </section>
    </div>


<?php require 'footer.php' ?>
</body>
</html>
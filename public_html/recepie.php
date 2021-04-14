<?php session_start();
if (empty($_SESSION)) {
    header('Location: login.php?ERROR="loginFirst"');
} ?>
<?php require 'ingridient/adddata.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/24326faed9.js" crossorigin="anonymous"></script>
    <title>Recepie</title>

    <style>
        .formDetail{text-align: center;
    background-color: ghostwhite;
    padding: 7%;
    border: 2px solid #ccc;}
        </style>

</head>

<body>
    <div class="container">
        <?php 
            require 'index.php'; 
            require 'connection.php';
        ?>
        
        <main>
            <section class="formDetail">

                <?php require 'ingridient/createrecepie.php' ?>

                <h4>Create your custom recipe</h4>
                <form action="recepie.php" method="POST" enctype="multipart/form-data">

<input type="text" class="form-control" name="recepieName" placeholder="Recipe Name" value="<?php echo $recepie; ?>">
<span class="error"><?php echo $ERROR['recepie']; ?></span>

<select class="form-control my-3" name="multiple[]" multiple value="<?php echo $choice; ?>">
    <?php require 'ingridient/select.php';
    foreach ($fetch as $element) { ?>
        <option value="<?php echo $element['name'] ?>"><?php echo $element['name'] ?></option>
    <?php } ?>
</select>

<span class="error"><?php echo $ERROR['choice']; ?></span>
<textarea class="form-control my-3" name="instructions" cols="30" rows="5" placeholder="write the description here" value="<?php echo $instructions; ?>"></textarea>
<span class="error"><?php echo $ERROR['instructions']; ?></span>
<input type="file" name="upload" >
<span class="error"><?php echo $ERROR['upload']; ?></span>
<button class="btn btn-success" type="submit" name="create" value="SUCCESS">Create recipe</button>
</form>
               
            </section>
        </main>
    </div>
</body>
    <!-- Footer -->
    <?php
        require_once('footer.php');
    ?>
</html>

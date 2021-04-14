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
      @media only screen and (max-width: 575px) {
          .myRecepies{width:100% !important;}
      }
      button a{color:#ffffff !important;}

        </style>

</head>

<body>
    <div class="container">
        <?php require 'index.php'; ?>
    </div>

    <div class="container-fluid">
        <div class=" grey-bg-1">
    <div class="grey-bg">
        <!-- Adding the list select option to get the info -->
        <div class = 'container filters'>
            <section class = 'ingridentFilter'>
                <form action="IngredientDetail.php" method="POST">
                    <legend> Select Ingredient to get specific Recipe </legend>
                    <select class="form-control my-3" name="multiple"  value="<?php echo $choice; ?>">
                        <?php
                        require 'ingridient/select.php';
                
                        foreach ($fetch as $element) { ?>
                            <option value="<?php echo $element['name'] ?>"><?php echo $element['name'] ?></option>
                        <?php } ?>
                    </select>
                    <button class = 'btn btn-success' type='submit' name='ingredientdetail'>Get Detail</button>
                </form>
            </section>

            <section class = 'nameFilter'>
                <form action="recipeDetail.php" method="POST">
                    <legend> Search by Recipe Name </legend>
                    <input class="form-control my-3" name="filterRecepieName" placeholder = 'Recipe Name'>
                    <button class = 'btn btn-success' type='submit' name='ingredientdetail'>Get Detail</button>
                </form>
            </section>     
        </div>
        </div>
    </div>
    </div>    
       
    <div class="container">

        <?php
        require 'ingridient/getrecepie.php';
        ?>
        <section class="recepieList" style="clear:both !important;">
            <h1> Our All Receipes</h1>
            <?php foreach ($fetch as $items) { ?>
                <article class='myRecepies'>
                    <div id="buttonleft">
                        <h3 class = 'headingRecepie'>Dish Name : <?php echo $items['rname']; ?></h3>
                        <figure class='dishImages'>
                        <?php echo "<img class = 'myimage' alt='Image was not uploaded'  src = 'image/dish/".$items['photo']."'>";?>
                    </figure>
							<div>
								<button class='btn btn-warning' id="editbtn"><a id ="linktoedit" href="editrecipe.php?varname=<?php echo $items['id'] ?>">Edit</a></button>
								<button class='btn btn-warning' id="commentbtn"><a id ="linktocomment" href="commentrecipe.php?varname=<?php echo $items['id'] ?>">Comment</a></button>
                                <button class='btn btn-info' id="sharebtn"><a id ="linktoshare" href="https://www.facebook.com/">Share</a></button>
							</div>
						</div>
                    <h6><a href = "ingredientss.php">Ingridients</a> : <?php echo $items['choice']; ?></h6>
                    <p style="margin-bottom:0px !important;">Instructions : <?php echo $items['des']; ?></p>
                    <span>Posted By :<?php echo $items['user'] ?></span>

                   
                </article>

            <?php } //end of foreach  
            ?>
        </section>
            </div>        
   
</body>

</html>
<?php
require_once('footer.php');
?>
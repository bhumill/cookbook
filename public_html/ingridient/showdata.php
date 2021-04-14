<html>
    <head>
    </head>
    <body> 
<?php
            error_reporting(E_ERROR | E_PARSE);
        // showing data on console to user
            ob_start();
            require 'select.php';
            if(isset($_POST['deleteRecipe'])){     
                $id = $_POST['id'];         
                $deleteid = $_POST['delete'];
                $nameIngre=$_POST['nameIn'];
                $sql1 = "select count(*) as total from recepie where choice like '%$nameIngre%'";
                $result = mysqli_query($conn, $sql1);
                $content = mysqli_fetch_array($result,MYSQLI_ASSOC);
                $id = mysqli_real_escape_string($conn,$deleteid);
                $query1 = mysqli_query($conn,$sql1);
                $row= mysqli_fetch_assoc($query1);
                if($row['total']==0){
                    $sql4 = "DELETE FROM ingridents WHERE name  like '%$nameIngre%'";
                    $query4 = mysqli_query($conn, $sql4);
                    require 'select.php';
                    header('Location: ingredientss.php');
                }else{
                    $sql2 = "DELETE FROM ingridents WHERE id = $deleteid";
                    $sql3 = "UPDATE  recepie SET choice = REPLACE(choice,'$nameIngre','')WHERE choice like '%$nameIngre%'" ;
                    $query2 = mysqli_query($conn,$sql2);
                    $query3 = mysqli_query($conn,$sql3);
                    require 'select.php';
                    header('Location: ingredientss.php');
                }
            }
            echo "<table class='table table-bordered'>";
            foreach($fetch as $element){
                echo "<tr><td>".$element["name"]." </td><td>";?>
                
            <form action="ingredientss.php" method="POST">
                    <input type="hidden" name="delete" value="<?= $element['id'];?>">
                    <input type="hidden" name="nameIn" value="<?= $element['name'];?>">
                    <button class="btn btn-danger my-2" type="button" name="del" value="submit"
                    data-toggle="modal" data-target="#m<?= $element["id"] ?>">Delete</button>
                    <?php echo "</td><td>" ?>
                    <button class="btn btn-primary my-2" type="button" name="descrip." 
                     data-toggle="modal" data-target="#r<?= $element["id"] ?>" >Description</button>
                    <?php echo "</td></tr>" ?>
            </form>
                <div class="modal" id="r<?= $element["id"] ?>" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <form method="post" action="editIngredient.php">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Custom Recipe</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            
                            <div class="modal-body">
							 
                                 <div class="form-group">
                                    <input type="hidden" name="id" value="<?= $element["id"] ?>">
                                    <label>Ingredient Name</label>
                                    <input type="text" name="iname" value="<?=$element["name"] ?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <input type="text" name="rname" value="<?= $element["des"] ?>" class="form-control">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Save changes</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>

                <div class="modal fade" id="m<?= $element["id"] ?>" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <form method="post" action="">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Delete Recipe</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Are You Sure you want to delete Recipe : <?=$element['name']?>
                                <input type="hidden" name="delete" value="<?= $element['id'];?>">
                                <input type="hidden" name="nameIn" value="<?= $element['name'];?>">
                                </p>
                                <p>Recepie Used in :</p>
                                <?php
                                $name =  $element['name'];
                                $receipeName = "SELECT * FROM recepie WHERE choice like '%$name%'";
                                $queryForRecepie = mysqli_query($conn, $receipeName);
                                $fetchDataForRecepie = mysqli_fetch_all($queryForRecepie,MYSQLI_ASSOC);
                                    ?>
                                <ul>
                                <?php 
                                 foreach($fetchDataForRecepie as $elementForRecepie){
                                     ?>
                                    <li>
                                    <?php echo $elementForRecepie["rname"]; ?> 
                                    </li><?php
                                }
                                ?>
                                </ul>
                            </div>
                                
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-danger" name="deleteRecipe" value="deleteRecipe">Delete</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>

                <?php 
            }
            echo "</table>";
            // deleting a particular item from ingridient section
            ?>
          </body>
</html>    
            
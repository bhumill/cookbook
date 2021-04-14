<?php
    $Recipe = $_POST['filterRecepieName'];
    $found = false;
    require 'ingridient/getrecepie.php';

    foreach($fetch as $element){
        
        if(in_array($Recipe, $element))
        { $found = true;
        ?>
            <article class='myRecepies'>
                <h3>Dish Name : <?php echo $element['rname']; ?></h3>
                <h4>Ingridients :<?php echo $element['choice']; ?></h4>
                <p>Instructions : <?php echo $element['des']; ?></p>
                <span>Posted By :<?php echo $element['user']; ?></span>
                
                <figure class='dishImages'>   

                        <?php echo "<img class = 'myimage' alt='Image not available'  src = 'image/dish/".$element['photo']."'>";?>

                    </figure>
            </article> 
        <?php }
    }
    if(!$found){
        require 'errorPage.php';
        // echo "NOT RESULT FOUND";
    }
?>
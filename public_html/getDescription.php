<?php

    $ingredient = $_POST['multiple'];
    // New associate array

    
    require 'ingridient/getrecepie.php';
    foreach($fetch as $element){
        // Converting the ingredient into string;
        $ing_arr = explode(',', $element['choice']);

        if(in_array($ingredient ,$ing_arr))
        { ?>
            <article class='myRecepies'>
                <h3>Dish Name : <?php echo $element['rname']; ?></h3>
                <h4>Ingridients : <?php echo $element['choice']; ?></h4>
                <p>Instructions : <?php echo $element['des']; ?></p>
                <span>Posted By :<?php echo $element['user'] ?></span>
            </article>       
        <?php }
    }
?>
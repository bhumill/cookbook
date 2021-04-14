<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       

require 'connection.php';
$id=$_REQUEST["id"];
$desc=$_REQUEST["rname"];
$name=$_REQUEST["iname"];
$intid=(int)$id;

 $sql="update ingridents set name='$name',des='$desc'  where id=$intid";

        if($conn->query($sql)===TRUE)
        {
                    require ('ingredientss.php');
        }


        ?>
    </body>
</html>

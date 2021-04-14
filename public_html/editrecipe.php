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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .myRecepies {
            background-color: #F3F3F3;
            padding: 10px;
            margin: 10px;
        }

        form{
            background-color : #F3F3F3;
            width :70%;
            margin : 50px auto;
            display : flex;
            flex-direction : column;
            padding : 20px;
            border-radius : 5px
        }

        .formItems{
            padding: 20px 0px;
            display: flex;
            justify-content : 'center';
        }

        .formItems > label, input, textarea{
          flex: 1;
          padding : 2px 5px;
        }

        input[type="submit"]{
            width : 60%;
            margin : 10px auto;
        }

        .recepieList {
            display: flex;
            flex-wrap: wrap;
        }

        a:hover a {
            color: white;
        }
        #labelblock
        {
            display: block;
        }

    </style>
</head>

<body>
    <div class="container">
        <?php require 'index.php'; ?>
        <hr>
        <?php
        $var_value = $_GET['varname'];
        require 'connection.php';
        $sqlshow = "SELECT * FROM recepie where id=$var_value";
        $query = mysqli_query($conn, $sqlshow);
        $fetch = mysqli_fetch_all($query,MYSQLI_ASSOC);
        ?>
        <section class="recepieList">
            <?php foreach ($fetch as $items) { ?>
            <form action="" method="post">
                <div class = 'formItems'>
                    <label>Name:</label>
                    <input name="recipenametxt" type="text" value="<?php echo $items['rname']; ?>"/><br/>
                </div>

                <div class = 'formItems'>
                    <label>Ingredients:</label>
                    <textarea name="ingerdientsnametxt"><?php echo $items['choice']; ?></textarea><br/>
                </div>

                <div class = 'formItems'>
                    <label>Instructions:</label>
                    <textarea name="instructionstxt"> <?php echo $items['des']; ?></textarea><br/>
                </div>

                <div class = 'formItems'>
                    <label>Posted by:</label>
                    <input name="usernametxt" type="text" value="<?php echo $items['user']; ?>"/><br/>
                </div>
                
                <input class='btn btn-success' type="submit" name="SubmitButton"/>
            </form>
            <?php } //end of foreach  
            ?>
        </section>
    </div>
</body>
<?php
$message = "";
if(isset($_POST['SubmitButton'])){ //check if form was submitted
  $recipenamesubmit = $_POST['recipenametxt'];
  $ingredientsnamesubmit = $_POST['ingerdientsnametxt'];
  $instructionsubmit = $_POST['instructionstxt'];
  $usernamesubmit = $_POST['usernametxt'];
  
  $sql = "UPDATE recepie SET rname='$recipenamesubmit',choice='$ingredientsnamesubmit',des='$instructionsubmit',user='$usernamesubmit' WHERE id=$var_value";
  $query = mysqli_query($conn, $sqlshow);
  $fetch = mysqli_fetch_all($query,MYSQLI_ASSOC);

    if ($conn->query($sql) === TRUE) {
      echo "<script> location.href='recepies.php'; </script>";
        exit;
    } else {
      echo "Error updating record: " . $conn->error;
    }
}    
?>
</html>
<?php
require_once('footer.php');
?>
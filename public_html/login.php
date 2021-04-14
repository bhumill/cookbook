<?php require 'loginvalidation.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>LOGIN</title>
    <style>
        span {
            color: RED;
        }

        a,
        a:hover {
            color: white;
        }
        .login-frm{
		background: ghostwhite;
    padding: 5%;
    width: 80%;
    margin: 5% auto;
    }
    
    </style>
</head>

<body>
    <div class="container">
        <form class="login-frm" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
            <legend><?php echo $ERROR['login']; ?></legend>
            <div class="form-row justify-content-center">
                <h3>Login</h3>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input class="form-control" name="email" id="inputEmail4" placeholder="Email" value="<?php echo $emailfill ?>">
                    <span><?php echo $ERROR['email'] ?> </span>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="password">
                    <span><?php echo $ERROR['password'] ?> </span>
                </div>
            </div>
            <button type="submit" name="submit" value="done" class="btn btn-success">Login</button>
            <a class="btn btn-primary" href="signupform.php">Sign-up</a>
            <br>
           
        </form>
    </div>
</body>

</html>
<?php
require_once('footer.php');
?>
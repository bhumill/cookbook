<?php
require 'validation.php';
// function to convert anything into array and split accordingly
// print_r(explode(' ',$content[1]['title']));
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Document</title>
  <style>
    span {
      color: RED;
    }
    .signup{background: ghostwhite;
    padding: 5%;
    width: 80%;
    margin: 5% auto;}
    footer {
   position:fixed !important;
  }
  </style>
</head>

<body>
  <form class="container signup" method="GET" action="signupform.php">
    <div class="form-row justify-content-center">
      <h3>Sign-up</h3>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Email</label>
        <input class="form-control" name="email" id="inputEmail4" placeholder="Email" value="<?php echo $email; ?>">
        <span><?php echo $ERROR['email'] ?> </span>
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Password</label>
        <input type="password" class="form-control" name="username" id="inputPassword4" placeholder="password" value="<?php echo $username ?>">
        <span><?php echo $ERROR['username'] ?></span>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputAddress">Address</label>
        <input type="text" class="form-control" name="address" id="inputAddress" placeholder="1234 Main St" value="<?php echo $address ?>">
      </div>
      <div class="form-group col-md-6">
        <label for="inputCity">Confirm Password</label>
        <input type="password" class="form-control" name="confirmPassword" id="confirmInputPassword" placeholder="password" value="<?php echo $confirmPassword ?>">
        <span><?php echo $ERROR['confirmPassword'] ?> </span>
      </div>


    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputCity">City</label>
        <input type="text" class="form-control" name="city" id="inputCity" value="<?php echo $city ?>">
        <span><?php echo $ERROR['city'] ?> </span>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <button type="submit" name="submit" value="SUCCESS" class="btn btn-primary">Sign-up</button>
        <a href="login.php" class="btn btn-success">Login</a>
      </div>
    </div>
  </form>

  </div>
</body>

</html>
<?php
require_once('footer.php');
?>
<?php
session_start();
// check whether the session array is empty.
if (empty($_SESSION)) {
  header('Location: login.php?ERROR="loginFirst"');
}

require 'index.php';
require 'connection.php';
$connection = $conn;
$var_value = $_GET['varname'];
$allComments = null;
function getAllComments($connection, $recipeID)
{
  $sql = "Select commentID,userID,commentContent from comments where recipeID='$recipeID'";
  return $connection->query($sql);
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
    }

    * {
      box-sizing: border-box;
    }

    /* Button used to open the contact form - fixed at the bottom of the page */
    .open-button {
      background-color: #555;
      color: white;
      padding: 16px 20px;
      border: none;
      cursor: pointer;
      opacity: 0.8;
      position: fixed;
      bottom: 23px;
      right: 28px;
      width: 280px;
    }

    /*Display comments*/
    .display-content {
      background-color: #E9E3E5;
      padding: 40px 80px;
      border: 2px;
      width: 1310px;

      position: fixed;
      top: 93px;
      left: 80px;
    }

    /*comment section*/
    .comment {
      background-color: #FCF9FA;
      width: 1000px;
      padding: 20px;


    }

    /* The popup form - hidden by default */
    .form-popup {
      display: none;
      position: fixed;
      bottom: 0;
      right: 15px;
      border: 3px solid #F1F1F1;
      z-index: 9;
    }

    /* Add styles to the form container */
    .form-container {
      max-width: 300px;
      padding: 10px;
      background-color: white;
    }

    /* Full-width input fields */
    .form-container input[type=text],
    .form-container input[type=password] {
      width: 100%;
      padding: 15px;
      margin: 5px 0 22px 0;
      border: none;
      background: #F1F1F1;
    }

    /* When the inputs get focus, do something */
    .form-container input[type=text]:focus,
    .form-container input[type=password]:focus {
      background-color: #ddd;
      outline: none;
    }

    /* Set a style for the submit/login button */
    .form-container .btn {
      background-color: #4CAF50;
      color: white;
      padding: 16px 20px;
      border: none;
      cursor: pointer;
      width: 100%;
      margin-bottom: 10px;
      opacity: 0.8;
    }

    /* Add a red background color to the cancel button */
    .form-container .cancel {
      background-color: red;
    }

    /* Add some hover effects to buttons */
    .form-container .btn:hover,
    .open-button:hover {
      opacity: 1;
    }
  </style>
</head>

<body>
  <?php
  $allComments = getAllComments($connection, $var_value);

  if ($allComments->num_rows > 0) {
    // echo "<div class='display-content'>";
    echo "<table>";
    while ($row = $allComments->fetch_assoc()) {
      echo "<tr><td>";
      echo "<br><div class='comment'> <b>userID:" . $row["userID"] . "</b><br/> " . $row["commentContent"] . "</div>";

      echo "<form action='commentrecipe.php?varname=" . $var_value . "' method='post'>"

        . "<input type='hidden'  value='" . $row["commentID"] . "' name='commentid'/>"
        . "<br>"
        . "<input type='submit' class='btn btn-secondary' value='Delete' name='DeleteButton'/></form>";
      echo "</td></tr>";
    }
    echo "</table>";
    //echo "</div>";
  } else {
    echo "No comments added yet";
  }
  ?>
  <button class="open-button" onclick="openForm()">+Add Comment</button>
  <div class="form-popup" id="myForm">
    <form action="commentrecipe.php?varname=<?php echo $var_value ?>" method="post" class="form-container">
      <h1>Add Comment</h1>
      <label for="email"><b>Comment :-</b></label>
      <input type="text" placeholder="Enter Comment" name="commenttxt" required>
      <input class='btn btn-success' type="submit" value="Add" name="SubmitButton" />
      <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
    </form>
  </div>
  <script>
    function openForm() {
      document.getElementById("myForm").style.display = "block";
    }

    function closeForm() {
      document.getElementById("myForm").style.display = "none";
    }
  </script>
</body>

</html>
<?php
if (isset($_POST['SubmitButton'])) { //check if form was submitted
  $commentContent = $_POST['commenttxt'];
  $userid = $_SESSION['email'];
  $sql = "INSERT INTO comments (recipeID, userID,commentContent) VALUES ('$var_value','$userid', '$commentContent')";
  $r = mysqli_multi_query($conn, $sql);
  if (!$r) {
    echo "Error creating database : " . mysqli_error($conn);
  } else {
    $allComments = getAllComments($connection, $var_value);
  }
}
if (isset($_POST['DeleteButton'])) {
  $commentid = $_POST['commentid'];
  $sql = "delete from comments where commentID='$commentid'";
  $execQuery = $conn->query($sql);
  if (!$execQuery) {
    echo "Error deleting record: " . $conn->error;
  } else {
    $allComments = getAllComments($connection, $var_value);
  }
}
?>
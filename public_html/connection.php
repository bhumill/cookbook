<?php
define('DB_SERVER','db');
define('DB_USERNAME','myuser');
define('DB_PASSWORD','secret');
define('DB_NAME','mydatabase');

$conn = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

if(!$conn){
    echo "ERROR in connection : ".mysqli_error($conn);
}

?>

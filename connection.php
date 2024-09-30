<?php 

$connection = new mysqli('localhost', 'root', '', 'crudd');

if ($connection) {
    echo "Database Connected!";
} else {
    die(mysqli_error($connection));

}

?>
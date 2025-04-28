<?php 


require 'conn.php';

$select_user = mysqli_query($conn, "SELECT * FROM tbl_users GROUP BY gender"); 
while ($row = mysqli_fetch_array($select_user)) {
    echo  $row ['firstname'] . '<br>';
}

$insert_user = mysqli_query($conn,"INSERT INTO tbl_users (firstname, middlename, lastname, gender) VALUES ('brent', 'cutie', 'ortega', 'male')");

$update_user = mysqli_query($conn,"UPDATE tbl_users SET firstname = 'brent', middlename = 'cutie', lastname = 'ortega'");


?>
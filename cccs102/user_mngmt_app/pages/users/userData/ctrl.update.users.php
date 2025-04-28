<?php
require '../../../includes/conn.php';
$id = $_GET ['user_id'];
if (isset($_POST['submit']))  {
    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $middlename = mysqli_real_escape_string($conn, $_POST['middlename']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    
    $update_user = mysqli_query( $conn ,"UPDATE tbl_user  SET firstname = '$firstname', middlename = '$middlename', lastname = '$lastname',  username = '$username', email = '$email' , password = '$password' WHERE user_id = '$id' ");

    header( "location: ../list.users.php");

}
?>
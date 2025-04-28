<?php
require '../../../includes/conn.php';

if (isset($_POST['submit'])) {

    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $middlename = mysqli_real_escape_string($conn, $_POST['middlename']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $role = mysqli_real_escape_string($conn, $_POST['role']);



    if (!data_check($conn, $username, 'tbl_user', 'username') || !data_check($conn, $username, 'tbl_user', 'email')) {
        header("location: ../add.users.php ");
        return;
    }

    $hashed_pass = password_hash($password, PASSWORD_DEFAULT);
    $insert_user = mysqli_query($conn, "INSERT INTO tbl_user (firstname, middlename, lastname, username, email, password, gender_id, role_id ) VALUES ('$firstname', '$middlename', '$lastname', '$username', '$email', '$hashed_pass', '$gender', '$role')" );
    header("location: ../list.users.php ");
}

function data_check($conn, $value, $table, $column) {
    $check = mysqli_query($conn, "SELECT * FROM $table WHERE $column = '$value' ");
    if (mysqli_num_rows($check) == 0) {
        return true;
    }

    return false;
}
?>
<?php
require '../../../includes/conn.php';

$target_id =$_GET['user_id'];
$delete_users = mysqli_query($conn ," DELETE FROM tbl_user WHERE user_id = '$target_id'");


header("location: ../list.users.php");
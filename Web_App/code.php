<?php
session_start();
require 'db_conn.php';

if(isset($_POST['delete']))
{
    $user_id = mysqli_real_escape_string($con, $_POST['delete']);

    $query = "DELETE FROM users WHERE id='$user_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "User Deleted Successfully";
        header("Location: admin_page.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "User Not Deleted";
        header("Location: admin_page.php");
        exit(0);
    }
}
?>
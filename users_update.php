<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'blood_bank');

    if(isset($_POST['updatedata']))
    {   
        $user_id = $_POST['update_user_id'];
        
        $uname = $_POST['uname'];
        $password = $_POST['password'];
       

        $query = "CALL update_users_val('$user_id','$uname','$password')";

        //$query = "UPDATE stock SET blood_group='$blood_group', unit='$unit' WHERE stock_id='$stock_id'";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location: users_index.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>


<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'blood_bank');

if(isset($_POST['insertdata']))
{
    $uname = $_POST['uname'];
    $password = $_POST['password'];
  
   $query ="CALL insert_users_val('$uname','$password')";


    //$query = "INSERT INTO users (`uname`,`password`) VALUES ('$uname','$password')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: users_index.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

?>





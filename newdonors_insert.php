<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'blood_bank');

if(isset($_POST['insertdata']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $blood_group = $_POST['blood_group'];
    $gender = $_POST['gender'];
    
   $query ="CALL insert_newdonors_val('$name','$email','$address','$blood_group','$gender')";


    //$query = "INSERT INTO users (`uname`,`password`) VALUES ('$uname','$password')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: newdonors_index.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

?>
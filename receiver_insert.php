<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'blood_bank');

if(isset($_POST['insertdata']))
{
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $contact = $_POST['contact'];
    $date = $_POST['date'];
    $blood_group = $_POST['blood_group'];
    $stock_id = $_POST['stock_id'];
    
    $doctor_id = $_POST['doctor_id'];
    
   $query ="CALL insert_blood_receiver_val('$name','$gender','$contact','$date','$blood_group','$stock_id','$doctor_id')";


    //$query = "INSERT INTO users (`uname`,`password`) VALUES ('$uname','$password')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: receiver_index.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

?>
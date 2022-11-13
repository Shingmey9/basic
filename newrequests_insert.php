<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'blood_bank');

if(isset($_POST['insertdata']))
{
    $name = $_POST['name'];
    
    $contact = $_POST['contact'];
    $blood_group = $_POST['blood_group'];
    $gender = $_POST['gender'];
   
    
   $query ="CALL insert_newrequests_val('$name','$contact','$blood_group','$gender')";


    //$query = "INSERT INTO users (`uname`,`password`) VALUES ('$uname','$password')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: newrequests_index.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

?>
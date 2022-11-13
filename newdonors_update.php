<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'blood_bank');

    if(isset($_POST['updatedata']))
    {   
        $newd_id = $_POST['update_newd_id'];
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $blood_group = $_POST['blood_group'];
        $gender = $_POST['gender'];
       
       

        $query = "CALL update_newdonors_val('$newd_id','$name','$email','$address','$blood_group','$gender')";

        //$query = "UPDATE stock SET blood_group='$blood_group', unit='$unit' WHERE stock_id='$stock_id'";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location: newdonors_index.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>
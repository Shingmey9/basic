<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'blood_bank');

    if(isset($_POST['updatedata']))
    {   
        $donor_id = $_POST['update_donor_id'];
        
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $contact = $_POST['contact'];
        $date = $_POST['date'];
        $blood_group = $_POST['blood_group'];
        $stock_id = $_POST['stock_id'];
    
        $doctor_id = $_POST['doctor_id'];
       
       

        $query = "CALL update_blood_receiver_val('$receiver_id','$name','$gender','$contact','$date','$blood_group','$stock_id','$doctor_id')";

        //$query = "UPDATE stock SET blood_group='$blood_group', unit='$unit' WHERE stock_id='$stock_id'";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location: receiver_index.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>
<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'blood_bank');

    if(isset($_POST['updatedata']))
    {   
        $req_id = $_POST['update_req_id'];
        
        $name = $_POST['name'];
        
        $contact = $_POST['contact'];
        $blood_group = $_POST['blood_group'];
        $gender = $_POST['gender'];
        
       

        $query = "CALL update_newrequests_val('$req_id','$name','$contact','$blood_group','$gender')";

        //$query = "UPDATE stock SET blood_group='$blood_group', unit='$unit' WHERE stock_id='$stock_id'";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location: newrequests_index.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>
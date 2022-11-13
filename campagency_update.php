<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'blood_bank');

    if(isset($_POST['updatedata']))
    {   
        $agency_id = $_POST['update_agency_id'];
        
        $name = $_POST['name'];
        $address = $_POST['address'];
       
       

        $query = "CALL update_campagency_val('$agency_id','$name','$address')";

        //$query = "UPDATE stock SET blood_group='$blood_group', unit='$unit' WHERE stock_id='$stock_id'";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location: campagency_index.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>
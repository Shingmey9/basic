<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'blood_bank');

if(isset($_POST['deletedata']))
{
    $req_id = $_POST['delete_req_id'];

   $query_run ="CALL delete_newrequests_val('$req_id')";


  //$query_run = "DELETE FROM users WHERE user_id='$user_id'";
   $query = mysqli_query($connection, $query_run);

    if($query)
    {
        echo '<script> alert("Data Deleted"); </script>';
        header("Location: newrequests_index.php");
    }
    else
    {
        echo '<script> alert("Data Not Deleted"); </script>';
    }
}

?>
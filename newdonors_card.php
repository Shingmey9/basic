<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> PHP CRUD with Bootstrap Modal </title>
    <link rel="stylesheet" href="table.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>  
            
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>


</head>
<body>


    <!-- Modal 
    <div class="modal fade" id="studentaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="newdonors_insert.php" method="POST">

                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name </label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Name">
                        </div>

                        <div class="form-group">
                            <label>Email </label>
                            <input type="email" name="email" class="form-control" placeholder="Enter Name">
                        </div>

                        <div class="form-group">
                            <label> Address </label>
                            <input type="text" name="address" class="form-control" placeholder="Enter Address">
                        </div>

                        <div class="form-group">
                        <label>Blood_Group </label>
                            <select name="blood_group">
                <option value="BloodGroup"></option>
                  <option value="A+">A+</option>
                  <option value="B+">B+</option>
                  <option value="A-">A-</option>
                  <option value="B-">B-</option>
                  <option value="AB+">AB+</option>
                  <option value="AB-">AB-</option>
                  <option value="O+">O+</option>
                  <option value="O-">O-</option>
              </select>
              <style type="text/css">
                       select{
                        width: 400px;
                        border: 1px solid #ddd;
                        border-radius: 3px;
                        outline: 0;
                        padding: 7px;
                        background-color: #fff;
                       
                    }
            </style>
                        </div>

                        <div class="form-group">
                            <label> Gender </label>
                            <input type="text" name="gender" class="form-control" placeholder="Enter Gender">
                        </div>


                      
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="insertdata" class="btn btn-primary">Save Data</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    EDIT POP UP FORM (Bootstrap MODAL)
    <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Edit Student Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="newdonors_update.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="update_newd_id" id="update_newd_id">

                        <div class="form-group">
                            <label> Name </label>
                            <input type="text" name="name" id="name" class="form-control"
                                placeholder="Enter First Name">
                        </div>

                        <div class="form-group">
                            <label> Email </label>
                            <input type="text" name="email" id="email" class="form-control"
                                placeholder="Enter Email">
                        </div>

                        <div class="form-group">
                            <label> Address </label>
                            <input type="text" name="address" id="address" class="form-control"
                                placeholder="Enter Address">
                        </div>

                        <div class="form-group">
                            <label> BloodGroup </label>
                            <input type="text" name="blood_group" id="blood_group" class="form-control"
                                placeholder="Enter Blood Group">
                        </div>

                        <div class="form-group">
                            <label> Gender </label>
                            <input type="text" name="gender" id="gender"  class="form-control" placeholder="Enter Gender">
                        </div>

        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="updatedata" class="btn btn-primary">Update Data</button>
                    </div>
                </form>

            </div>
        </div>
    </div>-->
<!-- DELETE POP UP FORM (Bootstrap MODAL) 
    <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Delete Agency Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="newdonors_delete.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="delete_newd_id" id="delete_newd_id">

                        <h4> Do you want to Delete this Data ??</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> NO </button>
                        <button type="submit" name="deletedata" class="btn btn-primary"> Yes</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

                </form>

            </div>
        </div>
    </div>
         -->       
                <div class="content">
        <div class="sidebar">
            <ul>
                <li>
                    <a href="#">
                        <i class="fas fa-clinic-medical"></i>
                        <div class="title">BloodBank</div>
                    </a>
                </li>

             <li>
                <a href="users_index.php">
                    <i class="fa fa-home"></i>
                    <div class="title">Home</div>
                </a>
             </li>

             <li>
                <a href="hospital_index.php">
                    <i class="fas fa-hospital"></i>
                    <div class="title">Hospital</div>
                </a>
             </li>
             <li>
                <a href="stock_index.php">
                    <i class="fas fa-notes-medical"></i>
                    <div class="title">Blood_stock</div>
                </a>
             </li>

             <li>
                <a href="doctor_index.php">
                    <i class="fas fa-user-md"></i>
                    <div class="title">Doctors</div>
                </a>
             </li>

             <li>
                <a href="campagency_index.php">
                    <i class="fas fa-laptop-medical"></i>
                    <div class="title">CampAgency</div>
                </a>
             </li>

             <li>
                <a href="camp_index.php">
                    <i class="fas fa-ambulance"></i>
                    <div class="title">Campaign</div>
                </a>
             </li>

             <li>
                <a href="donor_index.php">
                    <i class="fas fa-hand-holding-medical"></i>
                    <div class="title">Donors</div>
                </a>
             </li>

             <li>
                <a href="request_index.php">
                    <i class="fas fa-first-aid"></i>
                    <div class="title">Requests</div>
                </a>
             </li>
             <li>
                <a href="receiver_index.php">
                    <i class="fas fa-wheelchair"></i>
                    <div class="title">Patients</div>
                </a>
             </li>

           
            </ul>
        </div>
     <div class="main">
            <div class="top-bar">
                <h2>Recent Donors</h2>
        </div>
  <div class="container py-4">

  <style type="text/css">
        .container{
           margin-top: 50px;
        }

        </style>
        <div class="card-body">
        <a class="btn btn-primary" role="button" href="newdonors_index.php">View</a>
                </div>
        <div class="row">
        <!--<button class="btn btn-secondary"><a href="newdonors_index.php">Delete</a></button>-->
   
         <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection, 'blood_bank');

                $query = "CALL read_newdonors_data()";
                $query_run = mysqli_query($connection, $query);

                if($query_run)
                {
                    foreach($query_run as $row)
                    {
            ?>
<div class="col">
<div class="card" style="width: 17rem;">

  <img src="newd1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  <ul class="list-group list-group-flush">
    <li class="list-group-item">ID: <?php echo $row['newd_id']; ?></li>
    <li class="list-group-item">Name: <?php echo $row['name']; ?></li>
    <li class="list-group-item">Email: <?php echo $row['email']; ?></li>
    <li class="list-group-item">Address: <?php echo $row['address']; ?> </li>
    <li class="list-group-item">Blood Group: <?php echo $row['blood_group']; ?></li>
    <li class="list-group-item">Gender: <?php echo $row['gender']; ?></li>


  </ul>
  
  </div>
  
</div>

</div>

<?php           
                    }
                }
                else 
                {
                    echo "No Record Found";
                }
            ?>
    
</div>
</div>
             

</div>
        </div>
        </div>

</body>
</html>

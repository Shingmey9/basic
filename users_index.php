
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> PHP CRUD with Bootstrap Modal </title>
    <link rel="stylesheet" href="users_index.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>  
            
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
   
    <style type="text/css">
        .card{
            max-width: 1000px;
            margin-top: 60px;
            margin-left: 150px;
        }
        button{
            
            margin-top: 10px;
            
        }
        </style>

</head>
<body>

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
                <a href="newrequests_index.php">
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
             <li>
                <a href="Home.php">
                    <i class="fas fa-wheelchairfas fa-sign-out-alt"></i>
                    <div class="title">logout</div>
                </a>
             </li>
        
            </ul>
        </div>
        <div class="main">
        
            <div class="top-bar">
    <h2>Admin</h2>
                
        </div>
      
            
          

        <div class="cards">
          </div>
          <div class="cards">
         
        <div class="card2">
          <a href="newdonors_card.php"  class="card-name2">New Donors</a>
          <div class="icon-box2">
              
              <i class="fas fa-user-friends"></i>
          </div>
          </div>
        

          <div class="card2">
              <a href="newrequests_index.php"  class="card-name2">New Requests</a>
              <div class="icon-box2">
                  <i class="fas fa-user-friends"></i>
              </div>
              </div>
    </div>
              
    <!-- Modal -->
    <div class="modal fade" id="studentaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Users Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="users_insert.php" method="POST">

                    <div class="modal-body">
                        <div class="form-group">
                            <label>UserName </label>
                            <input type="text" name="uname" class="form-control" placeholder="Enter Name">
                        </div>

                        <div class="form-group">
                            <label> Password </label>
                            <input type="text" name="password" class="form-control" placeholder="Enter Password">
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

    <!-- EDIT POP UP FORM (Bootstrap MODAL) -->
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

                <form action="users_update.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="update_user_id" id="update_user_id">

                        <div class="form-group">
                            <label>UserName </label>
                            <input type="text" name="uname" id="uname" class="form-control"
                                placeholder="Enter Name">
                        </div>

                        <div class="form-group">
                            <label> Password </label>
                            <input type="text" name="password" id="password" class="form-control"
                                placeholder="Enter Password">
                        </div>

                       
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="updatedata" class="btn btn-primary">Update Data</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- DELETE POP UP FORM (Bootstrap MODAL) -->
    <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Delete Student Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="users_delete.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="delete_user_id" id="delete_user_id">

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


    <div class="container">
        <div class="jumbotron">
          
            <div class="card">
                <div class="card-body">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#studentaddmodal">
                        ADD DATA
                    </button>
                </div>
            </div>

            <div class="card">
                <div class="card-body">

                    <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection, 'blood_bank');

                $query = "CALL read_users_data()";
                $query_run = mysqli_query($connection, $query);
            ?>
                    <table id="datatableid" class="table table-bordered table-hover">
                 
                   
                              <thead class="table-dark">
                            <tr>
                                <th scope="col"> ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Password </th>
                                
                              
                                <th scope="col"> EDIT </th>
                                <th scope="col"> DELETE </th>
                            </tr>
                        </thead>
                        <?php
                if($query_run)
                {
                    foreach($query_run as $row)
                    {
            ?>
                        <tbody>
                            <tr>
                                <td> <?php echo $row['user_id']; ?> </td>
                                <td> <?php echo $row['uname']; ?> </td>
                                <td> <?php echo $row['password']; ?> </td>
                               
                               
                                <td>
                                    <button type="button" class="btn btn-primary editbtn"> EDIT </button>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger deletebtn"> DELETE </button>
                                </td>
                            </tr>
                        </tbody>
                        <?php           
                    }
                }
                else 
                {
                    echo "No Record Found";
                }
            ?>
                    </table>
                </div>
            </div>


        </div>
    </div>



   
    <script>
        $(document).ready(function () {

            $('.viewbtn').on('click', function () {
                $('#viewmodal').modal('show');
                $.ajax({ //create an ajax request to display.php
                    type: "GET",
                    url: "display.php",
                    dataType: "html", //expect html to be returned                
                    success: function (response) {
                        $("#responsecontainer").html(response);
                        //alert(response);
                    }
                });
            });

        });
    </script>


    <script>
        $(document).ready(function () {

            $('#datatableid').DataTable({
                "pagingType": "full_numbers",
                "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ],
                responsive: true,
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search Your Data",
                }
            });

        });
    </script>

    <script>
        $(document).ready(function () {

            $('.deletebtn').on('click', function () {

                $('#deletemodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#delete_user_id').val(data[0]);

            });
        });
    </script>

    <script>
        $(document).ready(function () {

            $('.editbtn').on('click', function () {

                $('#editmodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#update_user_id').val(data[0]);
                $('#uname').val(data[1]);
                $('#password').val(data[2]);
               
            });
        });
    </script>

</div>
        </div>
        </div>
    </div>

</body>
</html>
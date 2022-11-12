<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'blood_bank');

if(isset($_POST['submit']))
{
  $name = $_POST['name'];
  $contact = $_POST['contact'];
  $blood_group = $_POST['blood_group'];
  $gender = $_POST['gender'];


  if($name == "" || $contact == "" || $blood_group == "" || $gender == "")
{
    echo "All fields should be filled";
    echo "<a href='needblood.php'>Go Back</a>";

}

else{
  $sql = "insert into newrequests(name,contact,blood_group,gender) values('$name', '$contact', '$blood_group', '$gender')";
    $result = mysqli_query($connection,$sql);

    if($result)
    {
        echo "Request Sent Successfully";     
    }
}

}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NeedBlood</title>

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="need_blood.css">

</head>
<body>
    <div class="main">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">
                <img src="https://www.lstream.org/wp-content/uploads/cropped-ALLWHITELifeStream-Blood-Bank-Logo-Stacked-Rev.png "alt="logo">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="Home.php">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="campaign.php">Campaign</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="donate.php">Donate</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="needblood.php">Need Blood</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                      </li>
                </ul>
              </div>
            </div>
          </nav>
          

         
          <div class="donor">
              <h2>Request for Blood</h2>
              <form id="donor" method="post">
                  <label>Name : </label>
                  <br>
                  <input type="text" name="name" id="name" placeholder="Enter Your Name">
                  <br><br>
                  
                  <label>Contact : </label>
                  <br>
                  <input type="contact" name="contact" id="name" placeholder="Enter Your Address">
                  <br><br>
                  <label>BloodGroup : </label>
                  <select name="blood_group" id="name">
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
                 <br><br>
                  <label>Gender: </label><br>
                  <select name="gender" id="gender">
                    <option value="Gender"></option>
                      <option value="Men">Men</option>
                      <option value="Women">Women</option>
                     
                  </select>
                 <!-- &nbsp;&nbsp;&nbsp;
                  <input type="radio" name="gender" id="male">
                  &nbsp;
                  <span id="male">Male</span>
                  &nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="radio" name="gender" id="female">
                  &nbsp;
                  <span id="female">Female</span>
                  <br><br>-->
                  <button name="submit" class="submitbtn"><a href="#">Submit</a></button>
                    
              </form>
            </div>
            
        </div>
</body>
</html>


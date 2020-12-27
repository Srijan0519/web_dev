<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php if (isset($_POST['submit'])){
$servername = "localhost";
$username = "root";
$password = "";
$dbname="rcc";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
if(!$conn)
     {
          die("sorry failed to connect ".mysqli_connect_error());

     }

if (isset($_POST['firstname'])) {
      $firstname = $_POST['firstname'];

  }
  if (isset($_POST['lastname'])) {
    $lastname = $_POST['lastname'];

}

if (isset($_POST['email'])) {
  $email = $_POST['email'];
}
  if (isset($_POST['password'])) {
    $password = $_POST['password'];
  }
  
 

    $sql = "INSERT INTO user (firstName,lastname,Email,password )
     VALUES ('$firstname', '$lastname','$email','$password')";

         if ($conn->query($sql) === TRUE) {
       echo "New record created successfully";
     } else {
       echo "Error: " .$sql. "<br>" . $conn->error;
     }
     
     $conn->close();
    }
?>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="./css/formstyle.css">
<title>Form </title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-dark">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">about</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown link
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#action">Action</a>
          <a class="dropdown-item" href="#another action">Another action</a>
          <a class="dropdown-item" href="#something else here">Something else here</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
   
<form action="#" method="post">

    <div class="container">
<div class="form control">   
  <div class="row">
    <div class="cols sm-3">
    
<label for="name">First Name</label>
        <input type="text" name="firstname" id="firstname" class="form control" >
        <label for="lastname">Last Name</label>
        <input type="text" name="lastname"   id="lastname"class="form control">
        

      <label for= "email">Email</label>
        <input type="text" name="email"id="email" id="email" class="form control"  aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                
<label for="password">Password</label>
<input type="password" name ="password"class="form control" id="password" >
<div class="mb-3">
  </div>
<button type="submit" name="submit" class="btn btn-danger">submit</button>
  </div>
  </div>
  </form>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS---> 
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
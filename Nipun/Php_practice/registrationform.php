<?php
    if (isset($_POST['submit'])){
       
      // Submit these to a database

    
     
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname="contacts";
     
     // create a connection object
     
     $conn = mysqli_connect($servername,$username,$password,$dbname);
     
     
         
       
     // die if connect was not succesful
     
     if(!$conn)
     {
          die("sorry failed to connect ".mysqli_connect_error());
     
     }


        $name=$_POST['name']; 
        $email = $_POST['email'];
        $desc = $_POST['desc'];
     
     
     
     
      
        $sql="INSERT INTO `contacts`.`contact_us`(`Name`,`email`,`concern`) VALUES('$name','$email','$desc')";
      
      
      $result = mysqli_query($conn,$sql);

   
    //   if($result)
    //   {
    //     echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    //     <strong>Success!</strong> Your email ' . $email.'  has been submitted successfully!
    //     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    //       <span aria-hidden="true">×</span>
    //     </button>
    //   </div>';
    //   }

    //   else
    //   {
    //     echo "erooroo".mysqli_error($conn);
    //   }
   
   
   
    // }






    }
     


    

    
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Form </title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Get/Post</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/cwhphp/21_Get_Post.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" >
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" name="submit" type="submit">Search</button>
    </form>
  </div>
</nav>


<div class="container mt-3">
<h1>Contact us for your concern</h1>
    <form action="#" method="post">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
        </div>
    <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    
    
    <div class="form-group">
        <label for="desc"> Description</label>
       <textarea name="desc" id="desc" cols="30" rows="10" class="form-control"></textarea>
    </div>
    
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>


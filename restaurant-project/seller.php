<?php
    include 'database/db.php';

    if(isset($_POST['submit'])){
       $user = $_POST['username'];
       $pass = $_POST['password'];
       $email = $_POST['email'];
       $age = $_POST['age'];
       $send_result = $conn->prepare("insert into useradmin set username = ? , password=?  , email=?  , age=?");
       $send_result -> bindValue(1 , $user);
       $send_result -> bindValue(2 , $pass);
       $send_result -> bindValue(3 , $email);
       $send_result -> bindValue(4 , $age);
       $send_result -> execute();
    }
  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/style-login.css" />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
      crossorigin="anonymous"
    ></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-color">
        <a class="navbar-brand" href="#">NEWSBIT</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
          <li class="nav-item active">
              <a class="nav-link " href="#">NEWS <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#">GUIDES & ANALYTICS </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">EVENTS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled " href="#">EXPLAINED</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled " href="exit.php">EXIT</a>
            </li>
          </ul>
        </div>
      </nav>
      <div class="pt-5">  
  
<div class="container">  
  <div class="row">  
    <div class="col-md-5 mx-auto">  
      <div class="card card-body">  
    <form id="submitForm" action="#" method="POST" data-parsley-validate="" data-parsley-errors-messages-disabled="true" novalidate="" _lpchecked="1">  
      <input type="hidden" name="username" value="7635eb83-1f95-4b32-8788-abec2724a9a4">  
      
      <div class="form-group required">  
      <lSabel for="username"> Enter your Name </lSabel>  
      <input type="text" class="form-control text-lowercase" id="username" required="" name="username" value="">  
      </div>                      
      
      <div class="form-group required">  
      <label class="d-flex flex-row align-items-center" for="password"> Enter your Password   
      <a class="ml-auto border-link small-xl" href="#"> Forget Password? </a> </label>  
      <input type="password" class="form-control" required="" id="password" name="password" value="">  
      </div>  

      <div class="form-group required">  
      <label class="d-flex flex-row align-items-center" for="password"> Enter your Email  
      </label>  
      <input type="email" class="form-control" required="" id="email" name="email" value="">  
      </div>

      <div class="form-group required">  
      <label class="d-flex flex-row align-items-center" for="password"> Enter your Age 
      </label>  
      <input type="text" class="form-control" required="" id="age" name="age" value="">  
      </div>
       
      <div class="form-group pt-1">  
      <button class="btn btn-primary btn-block" name="submit" type="submit"> Sign Up </button>  
        </div>  
    </form>  
                
        </div>  
      </div>  
    </div>  
  </div>  
</div>  
</body>
</html>
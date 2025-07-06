<?php

    session_start();
    include 'database/db.php';
    
    $error = null;

    if(isset($_POST['submit'])){
       $user = $_POST['username'];
       $pass = $_POST['password'];
       $result = $conn->prepare("select * from useradmin where username = ? and password=?");
       $result ->bindValue(1 , $user);
       $result ->bindValue(2 , $pass);
       $result ->execute();
       if($result ->rowCount() >= 1){
          $rows = $result -> fetch (PDO::FETCH_ASSOC);
          // echo $rows['email'];
          $_SESSION['login'] = true;
          $_SESSION['username'] = $user;
          $_SESSION['email'] = $rows['email'];
          header('location:index.php');
       }else{
          $error = true ;

       }
    }
  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/style-login.css">
    <link rel="stylesheet" href="css/style.css">
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
      crossorigin="anonymous"
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="bg-news">
  <div class="top-menu" >
        
    <h1><a href="index.html">IRANIAN FOOD</a></h1>
    
    <nav class="nav" id="menu">
      <ul>
        <li class="top-menu-item">
          <a href="index.html/ #contact" >Contact Us</a>
        </li>
      </ul>
    </nav>
    <section class="clear-float"></section>
  </div>

    

      <div class="pt-5">  
  
<div class="container">  
  <div class="row">  
    <div class="col-md-5 mx-auto">  
      <div class="card card-body login-form">  
    <form id="submitForm" action="#" method="POST" data-parsley-validate="" data-parsley-errors-messages-disabled="true" novalidate="" _lpchecked="1">  
      <input type="hidden" name="username" value="7635eb83-1f95-4b32-8788-abec2724a9a4">  
      
      <div class="form-group required">  
      <lSabel class="d-flex" for="username"> Enter your Name </lSabel>  
      <input type="text" class="form-control text-lowercase" id="username" required="" name="username" value="">  
      </div>                      
      
      <div class="form-group required">  
      <label class="d-flex flex-row align-items-center" for="password"> Enter your Password   
      <a class="ml-auto border-link small-xl" href="#"> Forget Password? </a> </label>  
      <input type="password" class="form-control" required="" id="password" name="password" value="">  
      </div>  
      
      <div class="form-group mt-4 mb-4">  
      <div class="custom-control custom-checkbox">  
      <input type="checkbox" class="custom-control-input" id="remember-me" name="remember-me" data-parsley-multiple="remember-me">  
      
      </div>  
      
      </div>  
      
      <div class="form-group pt-1">  
      <button class="btn btn-primary btn-block" name="submit" type="submit"> Log In </button>  
      </div>  
    </form>  
      <p class="small-xl pt-3 text-center">  
      <span class="text-muted"> Not a member? </span>  
      <a href="register.php"> Sign up </a>  
      </p>  
        </div>  
      </div>  
    </div>  
  </div>  
</div>        
</body>

<?php if($error){?>
  <script>
    Swal.fire({
       icon: "error",
       title: "Oops...",
     text: "Please Sign Up!",
  
    });
  </script>

<?php }?>



</html>
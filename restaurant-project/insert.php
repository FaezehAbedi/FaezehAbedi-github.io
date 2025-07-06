<?php
  
  include 'database/db.php';
  $result = $conn->prepare("select * from newstable");
  $result ->execute();
  if($result ->rowCount() >= 1){
    $rows = $result ->fetchAll (PDO::FETCH_ASSOC);
    //  echo var_dump($rows);
  }
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
    
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/style-login.css" />
    <link rel="stylesheet" href="css/style.css">
    
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
      crossorigin="anonymous"
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
</head>
<body>
    <div class="top-menu" >
        
        <h1><a href="index.html">IRANIAN FOOD</a></h1>
        
        <nav class="nav" id="menu">
          <ul>
            <li class="top-menu-item">
              <a href="index.html/ #contact" >Contact Us</a>
            </li>
            <li class="top-menu-item">
              <a href="index.html/ #food-menu" >Food Menu</a>
            </li>
          </ul>
        </nav>
        <section class="clear-float"></section>
      </div>
<div class="container">  
  <div class="row">  
    <div class="col-md-5 mx-auto">  
      <div class="card card-body">  
                      
    <form id="submitForm" name="fileToUpload" action="database/add.php" enctype="multipart/form-data" method="POST" data-parsley-validate="" data-parsley-errors-messages-disabled="true" novalidate="" _lpchecked="1">  
      <label class="d-flex flex-row align-items-center" > Title</label>
      <input type="hidden" name="title" value="7635eb83-1f95-4b32-8788-abec2724a9a4">  
      
      <div class="form-group required">  
      <input type="text" class="form-control text-lowercase" id="title" required="" name="username" value="">  
      </div>                      
      
      <div class="form-group required">  
      <label class="d-flex flex-row align-items-center" > Price</label>  
      <input type="text" class="form-control" required="" id="price" name="price" value="">  
      </div>  
     
      <div class="mb-3">
      <input type="file" class="fileToUpload" id="fileToUpload" name="fileToUpload" aria-label="file example" required>
      <div class="invalid-feedback">Example invalid form file feedback</div>
      </div>
 
      <div class="form-group pt-1">  
      <button class="btn btn-primary btn-block" name="submit" type="submit"> ADD </button>  
      </div>  
           
    </form>  
              
      </div>  
    </div>  
  </div>  
</div> 

<table class="table">
  <thead>
    <tr>
      <th scope="col">Image</th>
      <th scope="col">title</th>
      <th scope="col">Price</th>
      <th scope="col">Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($rows as $row){?>
        <tr>
            <td><img src="img/<?php echo $rows['image']; ?>" height="80px" width="80px" alt=""></td>
            <td><?php echo $rows['title']; ?></td>
            <td><?php echo $rows['price']; ?></td>
            <td><?php echo $rows['date']; ?></td>
            <td>
                <a href="database/edit.php?id=<?php echo $rows['id']; ?>"><button class="btn btn-warning">Edit</button></a>
                <a href="database/delete.php?id=<?php echo $rows['id']; ?>"><button class="btn btn-danger">Delete</button></a>
            </td>
        </tr>

    <?php }?>
    
  </tbody>
</table>
</body>
</html>

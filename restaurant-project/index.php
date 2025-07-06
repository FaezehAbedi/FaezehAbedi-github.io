<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <button class="btn btn2" onclick="showmenu()"><i class="fas fa-bars"></i></button>
    <div class="header">
      <div class="top-menu" >
        
        <h1><a href="index.html">IRANIAN FOOD</a></h1>
        
        <nav class="nav" id="menu">
          <ul>
            <li class="top-menu-item">
              <a href="#contact" >Contact Us</a>
            </li>
            <li class="top-menu-item">
              <a href="#food-menu" >Food Menu</a>
            </li>
            <li class="top-menu-item">
              <a href="#sellers" >Registration of sellers </a>
            </li>
            <li>
                
              <i class="fa fa-sign-in icon-log"></i>
              session_start();
              <a href="login.php"><button class="btn btn-white">Login / SignUp</button></a>
            </li>
            <!-- <li>
                <button class="btn btn-white">Registration of sellers </button>
            </li> -->
          </ul>
        </nav>
        <section class="clear-float"></section>
      </div>
      <div class="header-text">
        <img
          src="img/g11wv8tt.png"
          alt=""
          width="600px"
          height="600px"
          class="header-img"
        />
        <h2>Online ordering of Iranian food</h2>
        <p>
          If you want to try Iranian food <br> this site will provide you with 
           <br>the best quality and in the <br> shortest time...
        </p>
        <a href="login.php"><button class="btn btn-header">Login / SignUp</button></a>
        
        <!-- <form action="" class="header-address">
            
            <input type="text" placeholder="Enter your City" class="input-email">
            <button class="btn-email"> <b>OK</b>

            </button>
        </form> -->
      </div>
    </div>
    <div class="main">
      <div class="services" >
        <h2 id="food-menu">Category of Iranian Food</h2>
        
        <div class="services-content1">
            <div class="box">
                <a href="menu/khorousht.html">
                 <img src="img/خورشت.jpg" alt="" class="menu">
                 <h4>Khorousht</h4>
                </a>
            </div>
            <div class="box">
                <a href="menu/khorousht.html">
                 <img src="img/آش.webp" alt="" class="menu">
                 <h4>Ash</h4>
                </a>
            </div>
            <div class="box">
                <a href="menu/khorousht.html">
                 <img src="img/خوراک.jpg" alt="" class="menu">
                 <h4>Khorak</h4>
                </a>
            </div>
            <div class="box">
                <a href="menu/khorousht.html">
                 <img src="img/دلمه.webp" alt="" class="menu">
                 <h4>Dolme</h4>
                </a>
            </div>
            <div class="box">
                <a href="menu/khorousht.html">
                 <img src="img/کوفته.jpg" alt="" class="menu">
                 <h4>Koofte</h4>
                </a>
            </div>
        </div>    
        <div class="services-content2">
            <div class="box">
                <a href="menu/khorousht.html">
                 <img src="img/کتلت.jfif" alt="" class="menu">
                 <h4>kotlet</h4>
                </a>
            </div>
            <div class="box">
                <a href="menu/khorousht.html">
                 <img src="img/کباب.jpg" alt="" class="menu">
                 <h4>Kebab</h4>
                </a>
            </div>
            <div class="box">
                <a href="menu/khorousht.html">
                 <img src="img/پلو.jpeg" alt="" class="menu">
                 <h4>Polo</h4>
                </a>
            </div>
            <div class="box">
                <a href="menu/khorousht.html">
                 <img src="img/دیزی.jpg" alt="" class="menu">
                 <h4>Dizi</h4>
                </a>
            </div>
            <div class="box">
                <a href="menu/khorousht.html">
                 <img src="img/اشکنه.jpeg" alt="" class="menu">
                 <h4>Eshkene</h4>
                </a>
            </div> 
      </div>
      <div class="sellers" >
        <div class="sellers-text">
          <img
            src="img/sellers.png"
            alt=""
            width="600px"
            height="600px"
            class="seller-img"
          />
          <h2 id="sellers"> Are you a business owner...?</h2>
          <p>
            Bring your business online and <br> increase your sales with this site.
            <a href="seller.php"><button class="btn btn-white btn-sell">Registration of sellers </button></a>
            
          </p>
          
      </div>
    <footer class="footer" id="contact">

    <ul>
      <li>Tell:09906252465</li>
      <li>Email:FaezehAbedi228@gmail.com</li>
      <li>&copy;Untitled. All rights reserved.</li>
      <li>Design: <a href="#">TEMPLATED</a></li>
      <li>Image: <a href="#">UNSPLASH</a></li>
    </ul>
  
    </footer>

    
      <script>
        function showmenu(){
          var m = document.getElementById("menu");
          if(m.className == "top-menu"){
              m.className += "show";

          }
          else
              m.className = "top-menu";
        }
      </script>    
    

  </body>
</html>

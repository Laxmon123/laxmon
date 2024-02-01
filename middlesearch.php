<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Charchoko</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./node_modules/fonts/bootstrap-icons.min.css">
</head>
<body >
    <!-- navbar is starts here -->
  
   <nav class="navbar  fixed-top navbar-expand-lg nav-wrapper">
  <div class="container">
    <a class="navbar-brand text-white" href="index.php">Charchoko </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title  text-white " id="offcanvasNavbarLabel">Charchoko</h5>       
        <button type="button" class="btn-close btn-close-white " data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 ">
          <li class="nav-item">
            <a class="nav-link  text-white" aria-current="page" href="#"> <i class="bi bi-house-fill"></i> Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#"><i class="bi bi-arrow-repeat"></i> Update</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"> <i class="bi bi-geo-alt-fill"></i> location</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="#"> <i class="bi bi-patch-question"></i> trems</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"> <i class="bi bi-browser-chrome"></i> invoice</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"> <i class="bi bi-megaphone-fill"></i> contact</a>
          </li>
         
         
            
        </ul>
        <p class="menu-text">👋 এখানে কলাম গুলি ধারাবাহিক ভাবে অ্যাড হবে 👋</p>
       
      </div>
    </div>
  </div>
</nav>

<!-- navbar is ends here -->
<!-- banner section is starts here --> 
<div class="banner-section mt-5 pt-5 text-center">
  <br><br><br>
   <marquee  direction="left">
   আপনি যে টিকিট টা কিনছেন এখান থেকে সার্চ করে তার ডিটেলস দেখে নিন
    </marquee> 
    
            <div class="input-group middle w-75">
            <input type="search" class="form-control rounded" placeholder="4 Digit Middle" aria-label="Search" aria-describedby="search-addon" />
            <button type="button" class="btn btn-outline-primary" data-mdb-ripple-init>search</button>
            </div>

    
</div>
<!-- banner section is ends here -->
  

<script src="./js/bootstrap.min.js"></script>
<script src="./js/app.js"></script>
</body>
</html>
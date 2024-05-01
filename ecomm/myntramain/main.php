<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Admin page</title>
  <link rel="stylesheet" href="style1.css" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
</head>
<body>
  <div class="container">
    <nav>
      <ul>
        <li><a href="#" class="logo">
          <img src="./images/myntra.png" alt="">
          <span class="nav-item">DashBoard</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-home"></i>
          <span class="nav-item">Home</span>
        </a></li>
        <li><a href="profile.php">
          <i class="fas fa-user"></i>
          <span class="nav-item" >Profile</span>
        </a></li>
        <li><a href="">
          <i class="fas fa-plus"></i>
          <span class="nav-item">Add item/products</span>
        </a></li>
        <li><a href="">
          <i class="fas fa-trash"></i>
          <span class="nav-item">update and delete</span>
        </a></li>
        <li><a href="">
          <i class="fas fa-tasks"></i>
          <span class="nav-item">Tasks</span>
        </a></li>
        <li><a href="">
          <i class="fas fa-cog"></i>
          <span class="nav-item">Settings</span>
        </a></li>
        <li><a href="">
          <i class="fas fa-question-circle"></i>
          <span class="nav-item">Help</span>
        </a></li>
        <li><a href="logout.php" class="logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Log out</span>
        </a></li>
      </ul>
    </nav>

    <section class="main">
    <h3>Hello, <?php echo $_SESSION['name']; ?></h3><br/>
      <div class="main-top">
      
        <h1>Products</h1>

        <i class="fas fa-user"></i>
      </div>
      <div class="main-skills">
        <div class="card">
          <i class="fas fa-boxes"></i>
          <h3>Product details</h3>
          <p>Total product:-</p>
          <button>Check Now</button>
        </div>
        <div class="card">
          <i class="fas fa-truck"></i>
          <h3>Delivery</h3>
          <p>Product delivered</p>
          <button>Check Now</button>
        </div>
        <div class="card">
          <i class="fas fa-box"></i>
          <h3>Product process</h3>
          <p>Product Buy from there</p>
          <button>Check Now</button>
        </div>
        <div class="card">
          <i class="fab fa-app-store-ios"></i>
          <h3>Product return</h3>
          <p>Total product :-</p>
          <button>Check Now</button>
        </div>
      </div>

     
    </section>
  </div>
</body>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>
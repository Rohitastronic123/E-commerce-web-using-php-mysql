<?php
include_once 'db_conn.php';
session_start();
$id=$_SESSION['id'];
$result = mysqli_query($conn,"SELECT * FROM admin where id='$id'");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title>profile</title>
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
          <h1><h3>Hello, <?php echo $_SESSION['id']; ?></h3><br/></h1>
        </a></li>
        <li><a href="#">
          <i class="fas fa-home"></i>
          <span class="nav-item">Home</span>
        </a></li>
        <li><a href="profile.php">
          <i class="fas fa-user"></i>
          <span class="nav-item">Profile</span>
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
    
    <div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-lg-9">
      <h1 class="mb-3">Contact Us</h1>
      <form>
        <div class="row g-3">
          <div class="col-md-6">
            <label for="your-name" class="form-label">Your Name</label>
            <input type="text" class="form-control" id="your-name" name="your-name" required>
          </div>
          <div class="col-md-6">
            <label for="your-surname" class="form-label">Your Surname</label>
            <input type="text" class="form-control" id="your-surname" name="your-surname" required>
          </div>
          <div class="col-md-6">
            <label for="your-email" class="form-label">Your Email</label>
            <input type="email" class="form-control" id="your-email" name="your-email" required>
          </div>
          <div class="col-md-6">
            <label for="your-subject" class="form-label">Your Subject</label>
            <input type="text" class="form-control" id="your-subject" name="your-subject">
          </div>
          <div class="col-12">
            <label for="your-message" class="form-label">Your Message</label>
            <textarea class="form-control" id="your-message" name="your-message" rows="5" required></textarea>
          </div>
          <div class="col-12">
            <div class="row">
              <div class="col-md-6">
                <button data-res="<?php echo $sum; ?>" type="submit" class="btn btn-dark w-100 fw-bold" >Send</button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

     
    
<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table>
  
  <tr>
    <td>First Name</td>
    <td>Last Name</td>
    <td>City</td>
    <td>Email id</td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["name"]; ?></td>
    <td><?php echo $row["email"]; ?></td>
    <td><?php echo $row["mobile"]; ?></td>
    <td><?php echo $row["gender"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
</section>
 </body>
</html>




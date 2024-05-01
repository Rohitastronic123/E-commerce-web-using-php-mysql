<?php
include "conn.php";
include "link.php";
?>
<!DOCTYPE html>
<html lang="en">
<body>
  
  <div class="imp">
  <nav class="navbar fixed-top  navbar-expand-lg navbar-light bg-light" style="padding: 0px;">
  <!-- Container wrapper -->
  <div class="container-fluid impp1">
    <!-- Toggle button -->
    <button class="navbar-toggler px-0" type="button" data-mdb-toggle="collapse"
      data-mdb-target="#navbarExampleOnHover" aria-controls="navbarExampleOnHover" aria-expanded="false"
      aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarExampleOnHover">
      <!-- Left links -->
      <ul class="navbar-nav me-auto ps-lg-0" style="padding-left: 0.15rem">
        <li class="nav-item">
          <a class="nav-link" href="#"><img src="./images/myntra.png" style="margin-left:25px;" alt="Myntra Logo" width="60px"></a>
        </li>
        <!-- Navbar dropdown -->
        <li class="nav-item dropdown dropdown-hover position-static">
          <a class="nav-link hv1 " href="#" id="navbarDropdown" role="button"
            data-mdb-toggle="dropdown" aria-expanded="false" style="margin-top:20px;margin-left:10px; font-weight:800;font-size:12px;">
            MEN
          </a>
          <!-- Dropdown menu -->
          <div class="dropdown-menu w-50 mt-0" aria-labelledby="navbarDropdown">
            <div class="container">
              <div class="row my-4">
                <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                  <div class="list-group list-group-flush">
                  <a href="" class="list-group-item list-group-item-" style="color:rgb(255, 81, 110); font-weight:bold;font-size:13px;">Topwear</a>
                    <a href="" class="list-group-item list-group-item-action">Lorem ipsum</a>
                    <a href="" class="list-group-item list-group-item-action">Dolor sit</a>
                    <a href="" class="list-group-item list-group-item-action">Amet consectetur</a>
                    <a href="" class="list-group-item list-group-item-action">Cras justo odio</a>
                    <a href="" class="list-group-item list-group-item-action">Adipisicing elit</a>
                  </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                  <div class="list-group list-group-flush">
                  <a href="" class="list-group-item list-group-item-" style="color:rgb(255, 81, 110); font-weight:bold;font-size:13px;">Topwear</a>

                    <a href="" class="list-group-item list-group-item-action">Explicabo voluptas</a>
                    <a href="" class="list-group-item list-group-item-action">Perspiciatis quo</a>
                    <a href="" class="list-group-item list-group-item-action">Cras justo odio</a>
                    <a href="" class="list-group-item list-group-item-action">Laudantium maiores</a>
                    <a href="" class="list-group-item list-group-item-action">Provident dolor</a>
                  </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-3 mb-md-0">
                  <div class="list-group list-group-flush">
                  <a href="" class="list-group-item list-group-item-" style="color:rgb(255, 81, 110); font-weight:bold;font-size:13px;">Topwear</a>

                    <a href="" class="list-group-item list-group-item-action">Iste quaerato</a>
                    <a href="" class="list-group-item list-group-item-action">Cras justo odio</a>
                    <a href="" class="list-group-item list-group-item-action">Est iure</a>
                    <a href="" class="list-group-item list-group-item-action">Praesentium</a>
                    <a href="" class="list-group-item list-group-item-action">Laboriosam</a>
                  </div>
                </div>
                <div class="col-md-6 col-lg-3">
                  <div class="list-group list-group-flush">
                  <a href="" class="list-group-item list-group-item-" style="color:rgb(255, 81, 110); font-weight:bold;font-size:13px;">Topwear</a>

                    <a href="" class="list-group-item list-group-item-action">Cras justo odio</a>
                    <a href="" class="list-group-item list-group-item-action">Saepe</a>
                    <a href="" class="list-group-item list-group-item-action">Vel alias</a>
                    <a href="" class="list-group-item list-group-item-action">Sunt doloribus</a>
                    <a href="" class="list-group-item list-group-item-action">Cum dolores</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
          <!-- Navbar dropdown -->
          <li class="nav-item dropdown dropdown-hover position-static">
          <a class="nav-link hv2" href="#" id="navbarDropdown" role="button"
            data-mdb-toggle="dropdown" aria-expanded="false" style="margin-top:20px;margin-left:10px; font-weight:800;font-size:12px;">
            WOMEN
          </a>
          <!-- Dropdown menu -->
          <div class="dropdown-menu w-50 mt-2" aria-labelledby="navbarDropdown">
            <div class="container">
              <div class="row my-4">
                <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                  <div class="list-group list-group-flush">
                  <a href="" class="list-group-item list-group-item-" style="color:rgb(234, 0, 255); font-weight:bold;font-size:13px;">Topwear</a>
                    <a href="" class="list-group-item list-group-item-action">Lorem ipsum</a>
                    <a href="" class="list-group-item list-group-item-action">Dolor sit</a>
                    <a href="" class="list-group-item list-group-item-action">Amet consectetur</a>
                    <a href="" class="list-group-item list-group-item-action">Cras justo odio</a>
                    <a href="" class="list-group-item list-group-item-action">Adipisicing elit</a>
                  </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                  <div class="list-group list-group-flush">
                  <a href="" class="list-group-item list-group-item-" style="color:rgb(234, 0, 255); font-weight:bold;font-size:13px;">Topwear</a>

                    <a href="" class="list-group-item list-group-item-action">Explicabo voluptas</a>
                    <a href="" class="list-group-item list-group-item-action">Perspiciatis quo</a>
                    <a href="" class="list-group-item list-group-item-action">Cras justo odio</a>
                    <a href="" class="list-group-item list-group-item-action">Laudantium maiores</a>
                    <a href="" class="list-group-item list-group-item-action">Provident dolor</a>
                  </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-3 mb-md-0">
                  <div class="list-group list-group-flush">
                  <a href="" class="list-group-item list-group-item-" style="color:rgb(234, 0, 255); font-weight:bold;font-size:13px;">Topwear</a>

                    <a href="" class="list-group-item list-group-item-action">Iste quaerato</a>
                    <a href="" class="list-group-item list-group-item-action">Cras justo odio</a>
                    <a href="" class="list-group-item list-group-item-action">Est iure</a>
                    <a href="" class="list-group-item list-group-item-action">Praesentium</a>
                    <a href="" class="list-group-item list-group-item-action">Laboriosam</a>
                  </div>
                </div>
                <div class="col-md-6 col-lg-3">
                  <div class="list-group list-group-flush">
                  <a href="" class="list-group-item list-group-item-" style="color:rgb(234, 0, 255); font-weight:bold;font-size:13px;">Topwear</a>

                    <a href="" class="list-group-item list-group-item-action">Cras justo odio</a>
                    <a href="" class="list-group-item list-group-item-action">Saepe</a>
                    <a href="" class="list-group-item list-group-item-action">Vel alias</a>
                    <a href="" class="list-group-item list-group-item-action">Sunt doloribus</a>
                    <a href="" class="list-group-item list-group-item-action">Cum dolores</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
  <!-- Navbar dropdown -->
  <li class="nav-item dropdown dropdown-hover position-static">
          <a class="nav-link hv3" href="#" id="navbarDropdown" role="button"
            data-mdb-toggle="dropdown" aria-expanded="false" style="margin-top:20px;margin-left:10px; font-weight:800;font-size:12px;">
            KIDS
          </a>
          <!-- Dropdown menu -->
          <div class="dropdown-menu w-50 mt-2" aria-labelledby="navbarDropdown">
            <div class="container">
              <div class="row my-4">
                <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                  <div class="list-group list-group-flush">
                  <a href="" class="list-group-item list-group-item-" style="color:rgb(253, 176, 9); font-weight:bold;font-size:13px;">Topwear</a>
                    <a href="" class="list-group-item list-group-item-action">Lorem ipsum</a>
                    <a href="" class="list-group-item list-group-item-action">Dolor sit</a>
                    <a href="" class="list-group-item list-group-item-action">Amet consectetur</a>
                    <a href="" class="list-group-item list-group-item-action">Cras justo odio</a>
                    <a href="" class="list-group-item list-group-item-action">Adipisicing elit</a>
                  </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                  <div class="list-group list-group-flush">
                  <a href="" class="list-group-item list-group-item-" style="color:rgb(253, 176, 9); font-weight:bold;font-size:13px;">Topwear</a>

                    <a href="" class="list-group-item list-group-item-action">Explicabo voluptas</a>
                    <a href="" class="list-group-item list-group-item-action">Perspiciatis quo</a>
                    <a href="" class="list-group-item list-group-item-action">Cras justo odio</a>
                    <a href="" class="list-group-item list-group-item-action">Laudantium maiores</a>
                    <a href="" class="list-group-item list-group-item-action">Provident dolor</a>
                  </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-3 mb-md-0">
                  <div class="list-group list-group-flush">
                  <a href="" class="list-group-item list-group-item-" style="color:rgb(253, 176, 9); font-weight:bold;font-size:13px;">Topwear</a>

                    <a href="" class="list-group-item list-group-item-action">Iste quaerato</a>
                    <a href="" class="list-group-item list-group-item-action">Cras justo odio</a>
                    <a href="" class="list-group-item list-group-item-action">Est iure</a>
                    <a href="" class="list-group-item list-group-item-action">Praesentium</a>
                    <a href="" class="list-group-item list-group-item-action">Laboriosam</a>
                  </div>
                </div>
                <div class="col-md-6 col-lg-3">
                  <div class="list-group list-group-flush">
                  <a href="" class="list-group-item list-group-item-" style="color:rgb(253, 176, 9); font-weight:bold;font-size:13px;">Topwear</a>

                    <a href="" class="list-group-item list-group-item-action">Cras justo odio</a>
                    <a href="" class="list-group-item list-group-item-action">Saepe</a>
                    <a href="" class="list-group-item list-group-item-action">Vel alias</a>
                    <a href="" class="list-group-item list-group-item-action">Sunt doloribus</a>
                    <a href="" class="list-group-item list-group-item-action">Cum dolores</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
  <!-- Navbar dropdown -->
  <li class="nav-item dropdown dropdown-hover position-static">
          <a class="nav-link hv4 " href="#" id="navbarDropdown" role="button"
            data-mdb-toggle="dropdown" aria-expanded="false" style="margin-top:20px;margin-left:10px; font-weight:800;font-size:12px;">
           HOME & LIVING
          </a>
          <!-- Dropdown menu -->
          <div class="dropdown-menu w-50 mt-2" aria-labelledby="navbarDropdown">
            <div class="container">
              <div class="row my-4">
                <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                  <div class="list-group list-group-flush">
                  <a href="" class="list-group-item list-group-item-" style="color:rgb(0, 179, 185); font-weight:bold;font-size:13px;">Topwear</a>
                    <a href="" class="list-group-item list-group-item-action">Lorem ipsum</a>
                    <a href="" class="list-group-item list-group-item-action">Dolor sit</a>
                    <a href="" class="list-group-item list-group-item-action">Amet consectetur</a>
                    <a href="" class="list-group-item list-group-item-action">Cras justo odio</a>
                    <a href="" class="list-group-item list-group-item-action">Adipisicing elit</a>
                  </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                  <div class="list-group list-group-flush">
                  <a href="" class="list-group-item list-group-item-" style="color:rgb(0, 179, 185); font-weight:bold;font-size:13px;">Topwear</a>

                    <a href="" class="list-group-item list-group-item-action">Explicabo voluptas</a>
                    <a href="" class="list-group-item list-group-item-action">Perspiciatis quo</a>
                    <a href="" class="list-group-item list-group-item-action">Cras justo odio</a>
                    <a href="" class="list-group-item list-group-item-action">Laudantium maiores</a>
                    <a href="" class="list-group-item list-group-item-action">Provident dolor</a>
                  </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-3 mb-md-0">
                  <div class="list-group list-group-flush">
                  <a href="" class="list-group-item list-group-item-" style="color:rgb(0, 179, 185); font-weight:bold;font-size:13px;">Topwear</a>

                    <a href="" class="list-group-item list-group-item-action">Iste quaerato</a>
                    <a href="" class="list-group-item list-group-item-action">Cras justo odio</a>
                    <a href="" class="list-group-item list-group-item-action">Est iure</a>
                    <a href="" class="list-group-item list-group-item-action">Praesentium</a>
                    <a href="" class="list-group-item list-group-item-action">Laboriosam</a>
                  </div>
                </div>
                <div class="col-md-6 col-lg-3">
                  <div class="list-group list-group-flush">
                  <a href="" class="list-group-item list-group-item-" style="color:rgb(0, 179, 185); font-weight:bold;font-size:13px;">Topwear</a>

                    <a href="" class="list-group-item list-group-item-action">Cras justo odio</a>
                    <a href="" class="list-group-item list-group-item-action">Saepe</a>
                    <a href="" class="list-group-item list-group-item-action">Vel alias</a>
                    <a href="" class="list-group-item list-group-item-action">Sunt doloribus</a>
                    <a href="" class="list-group-item list-group-item-action">Cum dolores</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
  <!-- Navbar dropdown -->
  <li class="nav-item dropdown dropdown-hover position-static">
          <a class="nav-link hv5 " href="#" id="navbarDropdown" role="button"
            data-mdb-toggle="dropdown" aria-expanded="false" style="margin-top:20px;margin-left:10px; font-weight:800;font-size:12px;">
            BEAUTY
          </a>
          <!-- Dropdown menu -->
          <div class="dropdown-menu w-50 mt-2" aria-labelledby="navbarDropdown">
            <div class="container">
              <div class="row my-4">
                <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                  <div class="list-group list-group-flush">
                  <a href="" class="list-group-item list-group-item-" style="color:rgb(255, 2, 2); font-weight:bold;font-size:13px;">Topwear</a>
                    <a href="" class="list-group-item list-group-item-action">Lorem ipsum</a>
                    <a href="" class="list-group-item list-group-item-action">Dolor sit</a>
                    <a href="" class="list-group-item list-group-item-action">Amet consectetur</a>
                    <a href="" class="list-group-item list-group-item-action">Cras justo odio</a>
                    <a href="" class="list-group-item list-group-item-action">Adipisicing elit</a>
                  </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                  <div class="list-group list-group-flush">
                  <a href="" class="list-group-item list-group-item-" style="color:rgb(255, 2, 2); font-weight:bold;font-size:13px;">Topwear</a>

                    <a href="" class="list-group-item list-group-item-action">Explicabo voluptas</a>
                    <a href="" class="list-group-item list-group-item-action">Perspiciatis quo</a>
                    <a href="" class="list-group-item list-group-item-action">Cras justo odio</a>
                    <a href="" class="list-group-item list-group-item-action">Laudantium maiores</a>
                    <a href="" class="list-group-item list-group-item-action">Provident dolor</a>
                  </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-3 mb-md-0">
                  <div class="list-group list-group-flush">
                  <a href="" class="list-group-item list-group-item-" style="color:rgb(255, 2, 2); font-weight:bold;font-size:13px;">Topwear</a>

                    <a href="" class="list-group-item list-group-item-action">Iste quaerato</a>
                    <a href="" class="list-group-item list-group-item-action">Cras justo odio</a>
                    <a href="" class="list-group-item list-group-item-action">Est iure</a>
                    <a href="" class="list-group-item list-group-item-action">Praesentium</a>
                    <a href="" class="list-group-item list-group-item-action">Laboriosam</a>
                  </div>
                </div>
                <div class="col-md-6 col-lg-3">
                  <div class="list-group list-group-flush">
                  <a href="" class="list-group-item list-group-item-" style="color:rgb(255, 2, 2); font-weight:bold;font-size:13px;">Topwear</a>

                    <a href="" class="list-group-item list-group-item-action">Cras justo odio</a>
                    <a href="" class="list-group-item list-group-item-action">Saepe</a>
                    <a href="" class="list-group-item list-group-item-action">Vel alias</a>
                    <a href="" class="list-group-item list-group-item-action">Sunt doloribus</a>
                    <a href="" class="list-group-item list-group-item-action">Cum dolores</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li class="nav-item dropdown dropdown-hover position-static">
          <a class="nav-link hv6 " href="#" id="navbarDropdown" role="button"
            data-mdb-toggle="dropdown" aria-expanded="false" style="margin-top:20px;margin-left:10px; font-weight:800;font-size:12px;">
            STUDIO<sup style="color:red; font-size:9px;">NEW</sup>
          </a>
          <div class="dropdown-menu exp1 " aria-labelledby="navbarDropdown">
           <center> <img src="https://constant.myntassets.com/web/assets/img/studio-logo-new.svg"  width="">
            <p id="l1">Your daily inspiration for everything fashion</p>
            <img src="https://constant.myntassets.com/web/assets/img/sudio-nav-banner.png" id="l1" alt="image" width="500px" height="320"/>
           
            <center>
            <button type="submit" class="bt1">EXPLORE STUDIO <img src="https://constant.myntassets.com/web/assets/img/chevron-right.svg"/></button>
</li>
<li class="nav-item dropdown dropdown-hover position-static">
          <a class="nav-link  " href="#" id="navbarDropdown" role="button"
            data-mdb-toggle="dropdown" aria-expanded="false" style="margin-top:20px;margin-left:10px; font-weight:800;font-size:12px;">
           <input type="search" name="" id="se1" placeholder="Search for product,brand and more ">
          </a>
</li>
<li class="dropdown hv5">
  <img src="./images/profile.png" alt="" width="20px" style="margin-left:10px;margin-top:25px;">
  <p
    class="p1"
    type="button"
    id="dropdownMenuButton"
    data-mdb-toggle="dropdown"
    aria-expanded="false"
  >
   Profile
</p>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <li class="dropdown-item" style="font-size:11px;font-weight:800;">WELCOME<br>To access account and manage orders
    
  </li><a class="r1" href="./backend/login.php">
  <button class="dropdown-item bt2">LOGIN/SIGNUP</button>  </a>
    <li><a class="dropdown-item" class="r1" href="./back/login.php">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
  </ul>
</li>

<li class="dropdown ">
  <a href="" class="p1"><img src="./images/download.png" alt="" width="30px" style="margin-left:50px;margin-top:23px;">
<p class="p1" style="margin-left:45px">Wishlist</p></a>
</li>
<li class="dropdown ">
<a href="" class="p1"> <img src="./images/beg.png" alt="" width="20px" style="margin-left:50px;margin-top:25px;">
  <p class="p1" style="margin-left:50px">Beg</p></a>
</li>



    
                  
                  </div>
                </div>
</li>
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->
    
  </div>
  <!-- Container wrapper -->
</div>
</body>
</html>

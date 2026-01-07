    <?php
$mname=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM market WHERE Id='".$_SESSION['market']."'"));

    ?>
    <div class="horizontal-menu">
        <nav class="navbar top-navbar col-lg-12 col-12 p-0">
          <div class="container">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
              <a class="navbar-brand brand-logo" href="index.html">
                <img src="../admin/image/weblogo.jpg" alt="logo" style="height: 50px; width: 100px" />
                
              </a>
              <a class="navbar-brand brand-logo-mini" href="index.html"><img src="../admin/assets/images/logo-mini.svg" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
             
              <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item nav-profile dropdown">
                  <a class="nav-link" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="nav-profile-img">
                      <img src="../admin/<?php echo $mname[9]?>" alt="image" />
                    </div>
                    <div class="nav-profile-text">
                      <p class="text-black font-weight-semibold m-0"> <?php echo $mname[1]?> </p>
                    

                    </div>
                  </a>
                  <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                   
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="../logout.php">
                      <i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>
                  </div>
                </li>
              </ul>
              <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="horizontal-menu-toggle">
                <span class="mdi mdi-menu"></span>
              </button>
            </div>
          </div>
        </nav>
       
</div>
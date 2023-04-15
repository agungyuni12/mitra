<?php
session_start();
if ($page == 'home' || $page == 'about') {
  include "setting/config.php";
} else {
  include "../setting/config.php";
}
?>
<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.php">COMMUNITY MITRA</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="index.php" class="logo"><img src="<?php if($page == 'home' || $page == 'about'){echo 'assets/img/logo.png' ;} else {echo '../assets/img/logo.png' ;}?>" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link <?php if($page=='home'){echo "active" ;} ?>" href="<?php if ($page == 'mitra' || $page == 'post' || $page == 'buat_post' || $page == 'login' || $page == 'edit') {
            echo "../";
          } ?>index.php">HOME</a></li>
          <li><a class="nav-link <?php if($page=='about'){echo "active" ;} ?>" href="<?php if ($page == 'mitra' || $page == 'post' || $page == 'buat_post' || $page == 'login' || $page == 'edit') {
            echo "../";
          } ?>about.php">TENTANG KAMI</a></li>
          <li><a class="nav-link <?php if($page=='mitra'){echo "active" ;} ?>" href="<?php if ($page == 'home' || $page == 'about') {
            echo "mitra/";
          } else if ($page == 'post' || $page == 'buat_post' || $page == 'login' || $page == 'edit' ) {
            echo "../mitra/";
          }
          ?>index.php">DATA MITRA</a></li>
          <li><a class="nav-link <?php if($page=='post'){echo "active" ;} ?>" href="<?php if ($page == 'home' || $page == 'about') {
            echo "post/";
          } else if ($page == 'mitra' || $page == 'login' || $page == 'edit' ) {
            echo "../post/";
          }
          ?>index.php">POST</a></li>
          <li><a id="buat_post" style="display: none;" class="nav-link <?php if($page=='buat_post'){echo "active" ;} ?>" href="<?php if ($page == 'home' || $page == 'about') {
            echo "post/";
          } else if ($page == 'mitra' || $page == 'login' || $page == 'edit' ) {
            echo "../post/";
          }
          ?>buat_post.php">BUAT POST</a></li>
          <li><a id="login" style="display: none;" class="nav-link <?php if($page=='login'){echo "active" ;} ?>" href="<?php if ($page == 'home' || $page == 'about') {
            echo "login/";
          } else if ($page == 'post' || $page == 'buat_post' || $page == 'mitra') {
            echo "../login/";
          }
          ?>index.php">LOGIN</a></li>
          <li class="dropdown"><a id="edit" style="display: none;" href="#"><span><?= $_SESSION['nama'];?></span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="nav-link <?php if($page=='edit'){echo "active" ;} ?>" href="<?php if ($page == 'home' || $page == 'about') {
            echo "login/";
          } else if ($page == 'post' || $page == 'buat_post' || $page == 'mitra') {
            echo "../login/";
          }
          ?>edit.php">EDIT PROFIL</a></li>
              <li><a href="<?php if ($page == 'home' || $page == 'about') {
            echo "login/";
          } else if ($page == 'post' || $page == 'buat_post' || $page == 'mitra') {
            echo "../login/";
          }
          ?>logout.php">LOGOUT</a></li>
            </ul>
          </li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
    <script>
      var nama = '<?= $_SESSION['nama'];?>';
      if (nama == "") {
        document.querySelector('#login').style.display="block";
      } else {
        document.querySelector('#edit').style.display="block";
        document.querySelector('#buat_post').style.display="block";
      }
    </script>
  </header>
  <!-- End Header -->
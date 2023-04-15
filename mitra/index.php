<?php
include "../setting/config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>COMMUNITY MITRA</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets" rel="icon">
  <link href="../assets" rel="bpswarna-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Krub:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="../assets/css/datatable.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-all.min.css">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Bikin - v4.8.0
  * Template URL: https://bootstrapmade.com/bikin-free-simple-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <?php $page = "mitra"; include "../menu/header.php" ;?>

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" id = "tampilan" style ="display : none;">

        <div class="section-title mt-10">
          <h2>Data Mitra</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <table id="mitra" class="display nowrap">
            <thead>
                <tr style="visibility: hidden ;">
                    <th>Foto</th>
                    <th>Judul</th>
                    <th>Isian</th>
                </tr>
            </thead>
            <tbody>
                <?php
                  $sql = mysqli_query($conn, "SELECT nama,tempat_lahir,alamat,pengalaman,nomor,rating, day(tanggal_lahir) as hari_lahir, month(tanggal_lahir) as bulan_lahir, year(tanggal_lahir) as tahun_lahir FROM mitra");
                  if ($sql!= false && $sql->num_rows > 0) {
                    // output data of each row
                    while($row = $sql->fetch_assoc()) {
                      $hari_lahir=$row["hari_lahir"];
                      $bulan_lahir=$row["bulan_lahir"];
                      $tahun_lahir=$row["tahun_lahir"];
                      $nama_bulan = date("F", mktime(0, 0, 0, $bulan_lahir, 10));
                      $nama = $row['nama'];
                      $tempat_lahir = $row['tempat_lahir'];
                      // $tanggal_lahir = $row['tanggal_lahir'];
                      $alamat = $row['alamat'];
                      $pengalaman = $row['pengalaman'];
                      $nomor = $row['nomor'];
                      $rating = $row['rating'];
                      ?>
                          <tr>
                            <td width = "250px" class="text-center">
                              <img class="mx-auto" style="width: 250px;" src="../assets/img/hero-img.png" alt=""> <br> <br>
                              <input data-role="rating" data-stars="5" data-value = "<?= $rating;?>" data-static="true" data-stared-color="orange" readonly /> <br>
                              CP <?= $nomor;?>
                            </td>
                            <td width = "100px">
                              Nama<br>TTL<br>Alamat<br>Pengalaman
                            </td>
                            <td>
                              <?= $nama;?><br><?= $tempat_lahir;?>, <?= $hari_lahir." ".$nama_bulan." ".$tahun_lahir ;?><br><?= $alamat;?><br><?=$pengalaman;?>
                            </td>
                          </tr>
                      <?php
                    }
                  }
                ?>
            </tbody>
        </table>


      </div>
    </section><!-- End Testimonials Section -->

  <?php include "../menu/footer.php" ;?>

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="https://cdn.metroui.org.ua/v4/js/metro.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <script src="../assets/js/datatable.js"></script>


  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
    <script>
    $(document).ready(function(){
      $('#tampilan').fadeIn(500);
    })
  </script>

</body>

</html>
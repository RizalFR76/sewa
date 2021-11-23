<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">

<title>S - Sewa Barang</title>
<meta content="" name="description">
<meta content="" name="keywords">

<!-- Favicons -->

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="<?= base_url('assets/vendor/animate.css/animate.min.css')?> " rel="stylesheet">
<link href="<?= base_url('assets/vendor/aos/aos.css')?> " rel="stylesheet">
<link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css')?> " rel="stylesheet">
<link href="<?= base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css')?> " rel="stylesheet">
<link href="<?= base_url('assets/vendor/boxicons/css/boxicons.min.css')?> " rel="stylesheet">
<link href="<?= base_url('assets/vendor/glightbox/css/glightbox.min.css')?> " rel="stylesheet">
<link href="<?= base_url('assets/vendor/remixicon/remixicon.css')?> " rel="stylesheet">
<link href="<?= base_url('assets/vendor/swiper/swiper-bundle.min.css')?> " rel="stylesheet">

<!-- Template Main CSS File -->
<link href="<?= base_url('assets/css/style.css')?> " rel="stylesheet">
</head>

<body>
<!-- ======= Header ======= -->
<?=$this->include('layouts/navbar.php') ?>
<!-- End Header -->

<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
    <div class="container">

    <div class="d-flex justify-content-between align-items-center">
        <h2>Halooo</h2>
        <!-- <ol>
        <li><a href="index.html">Home</a></li>
        <li>Inner Page</li>
        </ol> -->
    </div>

    </div>
</section><!-- End Breadcrumbs -->

<section class="inner-page">
    <div class="container">
    <!-- main content -->
        <?= $this->renderSection('content')?>
    <!-- end main content -->
    </div>
</section>

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<?=$this->include('layouts/footer.php') ?>
<!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="<?= base_url('assets/vendor/aos/aos.js')?> "></script>
<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')?> "></script>
<script src="<?= base_url('assets/vendor/glightbox/js/glightbox.min.js')?> "></script>
<script src="<?= base_url('assets/vendor/isotope-layout/isotope.pkgd.min.js')?> "></script>
<script src="<?= base_url('assets/vendor/php-email-form/validate.js')?> "></script>
<script src="<?= base_url('assets/vendor/swiper/swiper-bundle.min.js')?> "></script>

<!-- Template Main JS File -->
<script src="<?= base_url('assets/js/main.js')?> "></script>

</body>

</html>
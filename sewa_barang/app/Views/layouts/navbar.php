<header id="header" class="fixed-top d-flex align-items-center ">
<div class="container d-flex align-items-center justify-content-between">

    <div class="logo">
    <h1><a href="<?= base_url('/')?>">Selecao</a></h1>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="<?= base_url('/')?>"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
    </div>

    <nav id="navbar" class="navbar">
    <ul>
        <li><a class="nav-link scrollto " href="<?= base_url('/')?>">Home</a></li>
        <li><a class="nav-link scrollto" href="#about">About</a></li>
        <li><a class="nav-link scrollto " href="#portfolio">Galeri</a></li>
        <li class="dropdown"><a href="#"><span>Tabel</span> <i class="bi bi-chevron-down"></i></a>
        <ul>
            <li><a href="<?= base_url('/user')?>">Tabel User</a></li>
            <!-- <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
            <ul>
                <li><a href="#">Deep Drop Down 1</a></li>
                <li><a href="#">Deep Drop Down 2</a></li>
                <li><a href="#">Deep Drop Down 3</a></li>
                <li><a href="#">Deep Drop Down 4</a></li>
                <li><a href="#">Deep Drop Down 5</a></li>
            </ul>
            </li> -->
            <li><a href="<?= base_url('/barang')?>">Tabel Barang</a></li>
            <li><a href="<?= base_url('/sewa')?>">Tabel Sewa</a></li>
            <li><a href="<?= base_url('/sewa/info2')?>">Tabel Info</a></li>
        </ul>
        </li>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

</div>
</header>
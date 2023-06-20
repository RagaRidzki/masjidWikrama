<?php

require 'functions.php';
$muzakki = query("SELECT * FROM muzakki");

if (isset($_POST["submit"])) {
    if (input($_POST) > 0) {
        echo "<script>
        alert('data berhasil ditambahkan!');
        document.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
        alert('data gagal ditambahkan!');
        document.location.href = 'index.php';
        </script>";
    }
}

// Memeriksa koneksi
if (mysqli_connect_error()) {
    die("Koneksi database gagal: " . mysqli_connect_error());
} else {
    echo "Koneksi database berhasil!";
}

// Menutup koneksi
mysqli_close($conn);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masjid Wikrama</title>
    <!-- Link -->
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="img/wikrama.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="path/ke/style.css">
    <link rel="stylesheet" type="text/css" href="style_conjugate.php" media="screen" />
    <script src="https://kit.fontawesome.com/bbb4e0156b.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://kit.fontawesome.com/bbb4e0156b.js" crossorigin="anonymous"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700&family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
        rel="stylesheet">
</head>

<style>
    @media screen and (max-width:428px) {

        .nav-links ul li {
            display: block;
        }

        .nav-links {
            position: fixed;
            background: #1D267D;
            color: #fff;
            height: 100vh;
            width: 200px;
            top: 0;
            right: -200px;
            text-align: left;
            z-index: 2;
            transition: 1s;
        }

        .nav-links ul li a {
            color: #fff;
        }

        .nav-links ul li::after {
            content: '';
            width: 0%;
            height: 2px;
            background: #fff;
            display: block;
            margin: auto;
            transition: 0.5s;
        }

        .nav-links ul li:hover::after {
            width: 100%;
        }

        nav .fa-solid {
            display: block;
            color: #222;
            margin: 10px;
            font-size: 22px;
            cursor: pointer;
            position: relative;
        }

        nav .fa-xmark {
            color: #fff;
        }

        .navbar-brand {
            float: left;
            position: relative;
            right: 50px;
        }

        .nav-links ul {
            padding: 30px;
        }

        /* Home Section */
        .container-sm .about h1 {
            font-size: 25px;
            position: relative;
            bottom: 80px;
        }

        .container-sm .about p {
            font-size: 18px;
            position: relative;
            bottom: 60px;
        }

        .about .text-box .hero-btn {
            font-size: 15px;
            position: relative;
            bottom: 100px;
            margin-bottom: 220px;
        }

        .about .aboutme-col img {
            position: relative;
            display: none;
            bottom: 150px;
            left: 10px;
            width: 100px;
            border-radius: 5px;
        }

        /* Target */
        .target .card {}

        .target .card .card-body .hstack .card-text1 {
            font-size: 10px;
        }

        .target .card .card-body .hstack .card-text2,
        .card-text3 {
            margin-left: 16px;
            font-size: 10px;
        }

        .target .card .card-body .hstack .card-title {
            font-size: 12px;
        }

        .target .card .card-body .hstack .title2,
        .title3 {
            margin-left: 5px;
        }

        .target .card .card-body .hstack .title3 {
            margin-left: 30px;
        }

        .target .card .card-body .progress .progress-bar {
            width: 10px;
        }

        .target .card .card-body .card-footer marquee {
            font-size: 10px;
        }

        /* Banner */
        .carousel,
        .carousel-inner,
        .carousel-control-prev,
        .carousel-control-next {
            position: relative;
            border-radius: 10px;
            bottom: 150px;
        }

        /* Manfaat */
        .manfwakaf {
            width: 80%;
            text-align: left;
            position: relative;
            bottom: 300px;
        }

        .manfwakaf h1 {
            font-size: 25px;
            font-weight: 600;

        }

        .manfwakaf h1 span {
            color: #1D267D;
        }

        .manfwakaf p {
            color: #777;
            font-size: 18px;
            font-weight: 300;
        }

        .manfwakaf .wakafimg img {
            width: 40vh;
        }

        /* Cara Wakaf */
        .crwakaf {
            width: 80%;
            text-align: left;
            padding-top: 10px;
            position: relative;
            bottom: 250px;
            margin-bottom: 20px;
        }

        .crwakaf h1 {
            font-size: 25px;
            font-weight: 600;

        }

        .crwakaf h1 span {
            color: #1D267D;
        }

        .crwakaf .text p {
            color: #777;
            font-size: 18px;
            font-weight: 300;
        }

        .crwakaf .row .col .card {
            background-color: #fff;
            padding: 10px;
            top: 40px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .crwakaf .row .col .card .card-body .card-number {
            color: #1D267D;
        }

        /* Data Wakaf */
        .dtwakaf {
            width: 80%;
            text-align: left;
            padding-top: 20px;
            position: relative;
            bottom: 200px;
            margin-bottom: 20px;
        }

        .dtwakaf h1 {
            font-size: 25px;
            font-weight: 600;

        }

        .dtwakaf h1 span {
            color: #1D267D;
        }

        .dtwakaf p {
            color: #777;
            font-size: 18px;
            font-weight: 300;
        }

        .dtwakaf .table {
            padding: 10px;
            text-align: center;
            position: relative;
            right: 10px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .dtwakaf table thead tr th {
            background-color: #1D267D;
            color: #fff;
        }

        /* Gallery */
        .gallery {
            width: 80%;
            text-align: left;
            padding-top: 20px;
            position: relative;
            bottom: 200px;
        }

        .gallery h1 {
            font-size: 25px;
            font-weight: 600;

        }

        .gallery h1 span {
            color: #1D267D;
        }

        .gallery p {
            color: #777;
            font-size: 18px;
            font-weight: 300;
            margin-bottom: 60px;
        }


        .gallery .row .col .card img {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        /* Footer */
        .clearfix:after {
            content: "";
            display: table;
            clear: both;
        }

        .footer-main {
            background-color: #1D267D;
            padding: 24px 60px;
            color: white;


        }

        .footer-main .footer-grid {
            display: grid;
            position: relative;
            grid-template-columns: repeat(3, auto);
            grid-template-rows: repeat(2, auto);
            grid-gap: 10px;
            margin: 0 auto;
            max-width: 100%;
            justify-items: center;
        }

        .footer-main .footer-grid .footer-1 {
            position: relative;
            right: 60px;
        }

        .footer-main .footer-grid .footer-2 {
            position: relative;
            right: 40px;
        }

        .footer-main .footer-grid .footer-3 {
            position: relative;
            right: 35px;
        }
    }

    @media screen and (max-width: 768px) {
        .target .card {
            position: relative;
            margin-top: 0px;
        }

        .target .card .card-body .hstack .card-text1 {
            font-size: 15px;
        }

        .target .card .card-body .hstack .card-text2,
        .card-text3 {
            margin-left: 100px;
            font-size: 15px;
        }

        .target .card .card-body .hstack .card-title {
            font-size: 12px;
        }

        .target .card .card-body .hstack .title2,
        .title3 {
            margin-left: 140px;
        }

        .target .card .card-body .hstack .title3 {
            margin-left: 170px;
        }

        .target .card .card-body .progress .progress-bar {
            width: 10px;
        }

        .target .card .card-body .card-footer marquee {
            font-size: 10px;
        }
    }
</style>

<body>

    <!-- Navbar Start -->
    <nav>
        <a href="index.html"><img src=""></a>
        <a class="navbar-brand" href="#">
            <img src="img/wikrama-logo.png" alt="Logo" width="20" sizes="10">
            SMK Wikrama Bogor
        </a>
        <div class="nav-links" id="navlinks">
            <i class="fa-solid fa-xmark" onclick="hidemenu()"></i>
            <ul>
                <li><a href="index.php">Beranda</a></li>
                <li><a href="#carawakaf">Cara Wakaf</a></li>
                <li><a href="#datawakaf">Data Wakaf</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="https://smkwikrama.sch.id/">Web Wikrama</a></li>
            </ul>
        </div>
        <i class="fa-solid fa-bars" onclick="showmenu()"></i>
    </nav>
    <!-- Navbar End -->

    <div class="container-sm">
        <section class="about">
            <p>Majid Besar SMK Wikrama Bogor</p>
            <h1>Mari <span>Tingkatkan</span> <br>
                <span>Keimanan</span> Masyarakat <br>
                SMK Wikrama Bogor.
            </h1>

            <!-- Button -->
            <div class="text-box">
                <button type="button" class="hero-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Beri Sumbangan Sedekah
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Form Pemberian Shodaqoh</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="" method="post">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <div class="col-md-6">
                                                <label for="nama" class="form-label">Masukan Nama:</label>
                                                <input type="text" class="form-control" name="nama" id="nama" required>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="col-md-6">
                                                <label for="paket" class="form-label">Pilih Paket
                                                    Sedekah:</label>
                                                <select id="paket" name="paket" onchange="handlePaketChange()"
                                                    class="form-select" required>
                                                    <option selected></option>
                                                    <option value="Paket-A">Paket A</option>
                                                    <option value="Paket-B">Paket B</option>
                                                </select>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="col-md-6">
                                                <label for="kategori" class="form-label">Kategori
                                                    Sedekah:</label>
                                                <select class="form-select" id="kategori" name="kategori" disabled
                                                    required>
                                                    <option selected></option>
                                                    <option value="Uang">Uang</option>
                                                    <option value="Emas">Emas</option>
                                                </select>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="col-md-6">
                                                <label for="nama" class="form-label">Masukan Jumlah Uang / Emas:
                                                </label>
                                                <input type="number" class="form-control" name="nominal" id="nominal"
                                                    placeholder="Rupiah/Gram" required>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup
                                            Halaman</button>
                                        <button type="submit" class="btn btn-primary" name="submit">Kirim
                                            Sumbangan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="aboutme-col">
                <img src="img/dashboard.jpg">
            </div>

        </section>

        <!-- Target -->
        <section class="target">
            <div class="card">
                <div class="card-body">
                    <div class="hstack gap-3">
                        <div class="card-text1 text-body-secondary">Total Target Dana</div>
                        <div class="card-text2 text-body-secondary">Total Dana Terkumpul</div>
                        <div class="card-text3 text-body-secondary">Total Donatur</div>
                    </div>
                    <div class="hstack gap-3">
                        <h5>
                            <div class="title1 card-title">Rp.100.000,000</div>
                        </h5>
                        <h5>
                            <div class="title2 card-title">Rp.5.000,000</div>
                        </h5>
                        <h5>
                            <div class="title3 card-title">30 Orang</div>
                        </h5>
                    </div>
                    <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25"
                        aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar" style="width: 25%">25%</div>
                    </div>
                </div>
                <div class="card-footer text-body-secondary">
                    <marquee behavior="" direction="">"Tidaklah berkurang harta seseorang karena bersedekah." -
                        <span>(HR. Ahmad, Tirmidzi, Ibnu Majah, dan al-Hakim)</span>
                    </marquee>
                </div>
        </section>

        <!-- Banner -->
        <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/banner1.jpg" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="img/banner3.jpg" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="img/banner4new.jpg" class="d-block w-100">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- Manfaat Wakaf -->
        <section class="manfwakaf" id="manfaatwakaf">
            <h1><span>Manfaat</span> Wakaf, Infaq <br>
                Shodaqoh.
            </h1>
            <p>Berikut Adalah Beberapa Keutamaan Wakaf, Infaq <br>
                Shodaqoh Yang Akan Kalian Dapatkan</p>

            <div class="wakafimg">
                <img src="img/carawakaf.png" alt="">
            </div>
        </section>

        <!-- Cara Wakaf -->
        <section class="crwakaf" id="carawakaf">
            <h1><span>Cara Melakukan</span> Wakaf, Infaq <br>
                Shodaqoh.
            </h1>
            <div class="text">
                <p>Berikut Adalah Cara Melakukan Wakaq, Infaq Shodaqoh Untuk <br>
                    Membantu Pembangunan Masjid Besar SMK Bogor</p>
            </div>

            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-number">01</h5>
                            <h4 class="card-title">Isi Form Data Diri</h4>
                            <p class="card-text">Isikan form pengisian yang disediakan di form data diri, isikan dengan
                                data diri anda dengan teliti.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-number">02</h5>
                            <h4 class="card-title">Isikan Nominal Shodaqoh</h4>
                            <p class="card-text">Isikan nominal yang akan anda shodaqohkan, pastikan isi nominal dengan
                                seiklasnya tanpa ada paksaan apapun.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-number">03</h5>
                            <h4 class="card-title">Upload Bukti Pembayaran</h4>
                            <p class="card-text">Pilih motode pembayaran dan upload bukti <br> pembayaranya.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-number">04</h5>
                            <h4 class="card-title">Verifikasi Pembayaran</h4>
                            <p class="card-text">Pembayaran anda akan di verifikasi oleh admin dan jika terverifikasi
                                nama anda akan tampil.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Data Wakaf -->
        <section class="dtwakaf" id="datawakaf">
            <h1><span>Data Donatur</span> Wakaf, Infaq <br>
                Shodaqoh.
            </h1>
            <div class="text">
                <p>Berikut adalah data donatur wakaf, infaq shodaqoh untuk <br>
                    masjid besar SMK Wikrama Bogor</p>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Paket</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Nominal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 ?>
                    <?php foreach ($muzakki as $mzki): ?>
                        <tr>
                            <td>
                                <?= $i ?>
                            </td>
                            <td>
                                <?= $mzki["nama"] ?>
                            </td>
                            <td>
                                <?= $mzki["paket"] ?>
                            </td>
                            <td>
                                <?= $mzki["kategori"] ?>
                            </td>
                            <td>
                                <?= $mzki["nominal"] ?>
                            </td>
                        </tr>
                        <?php $i++ ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>

        <!-- Gallery -->
        <section class="gallery" id="gallery">
            <h1><span>Gallery</span> Masjid Besar SMK <br>
                Wikrama Bogor
            </h1>
            <div class="text">
                <p>Berikut Adalah Gallery Masjid Besar SMK Wikrama Bogor</p>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100">
                        <img src="img/masjid1.jpg" class="card-img-top" alt="...">
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="img/masjid2.jpg" class="card-img-top" alt="...">
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="img/masjid3.jpg" class="card-img-top" alt="...">
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="img/masjid4.jpg" class="card-img-top" alt="...">
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="img/masjid5.jpg" class="card-img-top" alt="...">
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="img/buka-galeri.png" class="card-img-top" alt="...">
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Footer -->
    <div class="clearfix"></div>
    <footer class="footer-main">
        <div class="footer-grid">
            <section class="footer-1">
                <h4>Tentang Wikrama</h4>
                <p>Sejarah</p>
                <p>Peraturan Sekolah</p>
                <p>Pendaftaran</p>
            </section>
            <section class="footer-2">
                <h4>Alamat</h4>
                <p>Jl. Raya Wangun
                    Kelurahan Sindangsari
                    Bogor Timur 16720</p>
                <h4>Telepon</h4>
                <p>0251-8242411 / 082221718035 (Whatsapp)</p>
            </section>
            <section class="footer-3">
                <h4>Sosial Media</h4>
                <p>Instagram : @smkwikrama</p>
                <p>Youtube : Multimedia Wikrama</p>
            </section>
        </div>
    </footer>
    <div class="footer-bottom">
        <p>Copyright &copy;2023 - <span>Raga Ridzki Panuntun</span></p>
    </div>


    <script type="text/javascript">
        function handlePaketChange() {
            var paketSelect = document.getElementById("paket");
            var barangSelect = document.getElementById("kategori");

            if (paketSelect.value === "Paket-A") {
                barangSelect.disabled = false;
                barangSelect.value = "Uang";
                barangSelect.onchange = function () {
                    if (barangSelect.value !== "Uang") {
                        barangSelect.value = "Uang";
                    }
                };
            } else if (paketSelect.value === "Paket-B") {
                barangSelect.disabled = false;
                barangSelect.value = "Emas";
                barangSelect.onchange = function () {
                    if (barangSelect.value !== "Emas") {
                        barangSelect.value = "Emas";
                    }
                };
            } else {
                barangSelect.disabled = true;
                barangSelect.value = "";
            }
        }
    </script>

    <script>
        var navlinks = document.getElementById("navlinks");
        function showmenu() {
            navlinks.style.right = "0"
        }
        function hidemenu() {
            navlinks.style.right = "-200px"
        }

    </script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>

</body>

</html>
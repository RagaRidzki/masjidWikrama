<?php
require 'functions.php';

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

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masjid Wikrama</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/bbb4e0156b.js" crossorigin="anonymous"></script>
</head>
<style>
    body {
        background-image: url(img/background2.jpg);
        background-size: cover;
        background-repeat: no-repeat;
    }
    nav {
        display: flex;
        padding: 2% 6%;
        justify-content: space-between;
        align-items: center;
    }

    nav img {
        width: 150px;
    }

    .nav-links {
        flex: 1;
        text-align: right;
    }

    .nav-links ul li {
        list-style: none;
        display: inline-block;
        padding: 8px 12px;
        position: relative;
    }

    .nav-links ul li a {
        color: #fff;
        text-decoration: none;
        font-size: 15px;
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

    .text-box {
        width: 90%;
        color: #fff;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
    }

    .text-box h1 {
        font-size: 62px;
    }

    .text-box p {
        margin: 10px 0 40px;
        font-size: 14px;
        color: #fff;
    }

    .hero-btn {
        display: inline-block;
        text-decoration: none;
        color: #fff;
        border: 1px solid #fff;
        padding: 12px 34px;
        font-size: 13px;
        background: transparent;
        position: relative;
        cursor: pointer;
        transition: 0.3s;
    }

    .hero-btn:hover {
        border: 1px solid #f44336;
        background: #f44336;
        transition: 1s;
    }

    nav .fa-solid {
        display: none;
    }

    @media screen and (max-width:360px) {
        .text-box h1 {
            font-size: 20px;
        }

        .nav-links ul li {
            display: block;
        }

        .nav-links {
            position: fixed;
            background: #f44336;
            height: 100vh;
            width: 200px;
            top: 0;
            right: -200px;
            text-align: left;
            z-index: 2;
            transition: 1s;
        }

        nav .fa-solid {
            display: block;
            color: #fff;
            margin: 10px;
            font-size: 22px;
            cursor: pointer;
        }

        .nav-links ul {
            padding: 30px;
        }
    }

    .sub-header {
        height: 50vh;
        width: 100%;
        background-image: linear-gradient(rgba(4, 9, 30, 0.7), rgba(4, 9, 30, 0.7)), url(img/sedekah.jpg);
        background-position: center;
        background-size: cover;
        text-align: center;
        color: #fff;
    }

    .sub-header h1 {
        margin-top: 50px;
        font-size: 35px;
    }

    .about-me {
        width: 80%;
        margin: auto;
        padding-top: 80px;
        padding-bottom: 50px;
    }

    .aboutme-col {
        flex-basis: 48%;
        padding: 30px 2px;
    }

    .aboutme-col img {
        width: 100%;
        border-radius: 20px;
    }

    .aboutme-col h1 {
        padding-top: 0;
    }

    .aboutme-col p {
        padding: 15px 0 25px;
    }

    @media screen and (max-width: 360px) {
        .sub-header h1 {
            font-size: 24px;
        }
    }

    /* Form Section */
    .card {
        margin-top: 100px;
        margin-left: 450px;
        margin-bottom: 100px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    .card .card-header {
        padding: 20px;
        background-color: #1D267D;
        color: #fff;
    }

    .card-title {
        margin: 20px;

    }

    .col-md-6,
    .col-auto,
    .mb-3,
    .col-12 {
        margin-left: 20px;
        margin-top: 10px;
        margin-bottom: 15px;
    }

    .row {
        margin-left: 12px;
        margin-top: 20px;
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

    .footer-grid {
        display: grid;
        grid-template-columns: repeat(3, auto);
        grid-template-rows: repeat(2, auto);
        grid-gap: 10px;
        margin: 0 auto;
        max-width: 100%;
        justify-items: center;
    }

    @media (max-width: 1024px) {
        .footer-grid {
            padding-left: 20px;
        }
    }

    .footer-grid p {
        margin: 10px 0;
    }

    .footer-bottom {
        background: #fff;
        /* width: 100vw; */
        padding: 20px 0;
        text-align: center;
    }

    .footer-bottom p {
        font-size: 20px;
        color: #222
    }

    .footer-bottom span {
        opacity: .4;
    }
</style>

<body>
    <section class="sub-header">
        <nav>
            <a href="index.html"><img src=""></a>
            <div class="nav-links" id="navlinks">
                <i class="fa-solid fa-xmark" onclick="hidemenu()"></i>
                <ul>
                    <li><a href="index.html">Beranda</a></li>
                </ul>
            </div>
            <i class="fa-solid fa-bars" onclick="showmenu()"></i>
        </nav>
        <h1>"Tidaklah berkurang harta seseorang karena bersedekah." <br> (HR. Ahmad, Tirmidzi, Ibnu Majah, dan al-Hakim)
        </h1>
    </section>

    <!-- Form Section -->
    <form action="" method="post">
        <div class="card" style="width: 40rem;">
            <div class="card-header">
                Form Pemberian Shodaqoh
            </div>
            <ul class="list-group list-group-flush">
                <form class="row g-3">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="col-md-6">
                                <label for="nama" class="form-label">Nama:</label>
                                <input type="text" class="form-control" name="nama" id="nama" required>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="col-md-6">
                                <label for="paket" class="form-label">Pilih Paket Sedekah:</label>
                                <select id="paket" name="paket" onchange="handlePaketChange()" class="form-select" required>
                                    <option selected></option>
                                    <option value="Paket-A">Paket A</option>
                                    <option value="Paket-B">Paket B</option>
                                </select>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="col-md-6">
                                <label for="kategori" class="form-label">Kategori Sedekah:</label>
                                <select class="form-select" id="kategori" name="kategori" disabled required>
                                    <option selected></option>
                                    <option value="Uang">Uang</option>
                                    <option value="Emas">Emas</option>
                                </select>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="col-md-6">
                                <label for="nama" class="form-label">Masukan Jumlah Uang/Barang:</label>
                                <input type="number" class="form-control" name="nominal" id="nominal"
                                    placeholder="Rupiah/Gram" required>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary" name="submit">Kirim Sumbangan</button>
                            </div>
                        </li>
                    </ul>
                </form>
            </ul>
        </div>
    </form>

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


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        function handlePaketChange() {
            var paketSelect = document.getElementById("paket");
            var barangSelect = document.getElementById("kategori");

            if (paketSelect.value === "Paket-A") {
                barangSelect.disabled = false;
                barangSelect.value = "Uang";
                barangSelect.onchange = function() {
                    if (barangSelect.value !== "Uang") {
                        barangSelect.value = "Uang";
                    }
                };
            } else if (paketSelect.value === "Paket-B") {
                barangSelect.disabled = false;
                barangSelect.value = "Emas";
                barangSelect.onchange = function() {
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



    <!-- Java script for toggle menu -->
    <script>
        var navlinks = document.getElementById("navlinks");
        function showmenu() {
            navlinks.style.right = "0"
        }
        function hidemenu() {
            navlinks.style.right = "-200px"
        }

    </script>

</body>

</html>
<?php

session_start();

if (!isset($_SESSION["login"])) {
    header("Location: ../models/login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Form Edit</title>
</head>

<body>

    <!--Start Sidebar  -->

    <div class="sidebar close">

        <!-- logo -->
        <div class="logo-details">
            <img src="../assets/img/logo/administrator.png" alt="Profile">
            <span class="logo_name">Administrator</span>
        </div>

        <!-- navbar menu -->
        <ul class="nav-links">
            <li>

                <!-- menu -->

                <a href="<?= BASE ?>dashboard">
                    <i class='bx bx-grid-alt'></i>
                    <span class="link_name">Dashboard</span>
                </a>

            </li>
            <li>

                <!-- dropdown -->

                <div class="iocn-link">
                    <a href="<?= BASE ?>list">
                        <i class='bx bx-collection'></i>
                        <span class="link_name">List Data</span>
                    </a>
                    <!-- <i class='bx bxs-chevron-down arrow'></i> -->
                </div>
                <ul class="sub-menu">
                    <li><a href="<?= BASE ?>list">List Data</a></li>
                </ul>
            </li>

            <!-- dropdown -->
            <li>
                <div class="iocn-link">
                    <a href="<?= BASE ?>detail">
                        <i class='bx bx-book-alt'></i>
                        <span class="link_name">Detail Data</span>
                    </a>
                    <!-- <i class='bx bxs-chevron-down arrow'></i> -->
                </div>
                <ul class="sub-menu">
                    <li><a href="<?= BASE ?>detail">Detail Data</a></li>
                </ul>
            </li>
            <li>

                <div class="iocn-link">
                    <a href="<?= BASE ?>tambah">
                        <i class='bx bx-pie-chart-alt-2'></i>
                        <span class="link_name">Form</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a href="<?= BASE ?>tambah">Form</a></li>
                </ul>

            </li>
            <li>

                <!-- menu -->

                <a href="#">
                    <i class='bx bx-line-chart'></i>
                    <span class="link_name">Chart</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Chart</a></li>
                </ul>
            </li>
            <li>
                <!-- menu -->

                <a href="#">
                    <i class='bx bx-compass'></i>
                    <span class="link_name">Explore</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Explore</a></li>
                </ul>
            </li>
            <li>
                <!-- menu -->

                <a href="#">
                    <i class='bx bx-cog'></i>
                    <span class="link_name">Setting</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Setting</a></li>
                </ul>
            </li>
            <li>
                <!-- menu -->

                <a href="<?= BASE ?>logout">
                    <i class='bx bx-log-out'></i>
                    <span class="link_name">Log out</span>
                </a>
            </li>
        </ul>
    </div>

    <!-- End Sidebar -->



    <!-- home -->

    <section class="home-section">

        <div class="home-content">

            <!-- menu - sun -->
            <i class='bx bx-menu'></i>
            <i class='bx bxs-sun'><span class="links_side">Switch</span></i>

            <!-- switch toggle -->
            <div class="mode-toggle">
                <span class="switch"></span>
            </div>
            <i class='bx bxs-bell'><span class="links_side">Notify</span></i>
        </div>

        <!-- Tabel Detail Data List -->
        <div class="datalist">

            <!-- Detail Data List -->
            <div class="data-list">
                <div class="content-data">
                    <h2>Form Edit</h2>
                </div>

                <div class="container-form">
                    <form action="<?= BASE ?>prosesedit" method="POST" autocomplete="off" enctype="">
                        <div class="box">
                            <div>
                                <!-- KODE -->
                                <label>Kode :</label><br>
                                <input type="text" name="txt_kode" readonly required value="<?= $data["nisn"] ?>"><br>

                                <!-- NAMA -->
                                <label>Nama :</label><br>
                                <input type="text" name="txt_nama" required value="<?= $data["nama"] ?>"><br>

                                <!-- Agama -->
                                <label>Agama : </label><br>
                                <select id="perbuku" name="select_agama">
                                    <option disabled selected hidden value="Agama">Pilih Agama</option>
                                    <option <?= getSelected($data["agama"], "ISLAM"); ?>>ISLAM</option>
                                    <option <?= getSelected($data["agama"], "KRISTEN"); ?>>KRISTEN</option>
                                    <option <?= getSelected($data["agama"], "BUDDHA"); ?>>BUDDHA</option>
                                    <option <?= getSelected($data["agama"], "HINDU"); ?>>HINDU</option>
                                </select>
                                <br>

                            </div>

                            <div class="space">

                                <!-- JENIS KELAMIN -->
                                <label>Jenis Kelamin :</label><br>
                                <input type="radio" name="rd_jenkel" value="L" <?= getChecked($data["jenkel"], "L"); ?>>Laki-Laki<br>
                                <input type="radio" name="rd_jenkel" value="P" <?= getChecked($data["jenkel"], "P"); ?>>Perempuan<br>

                                <br>

                                <!-- GAMBAR -->
                                <label="gbrang">Gambar : </label><br>
                                    <input type="file" name="file_gambar">

                            </div>

                            <div class="space">

                                <!-- CATATAN ALAMAT -->
                                <label>Alamat : </label>
                                <br>
                                <textarea class="form-control" name="txt_alamat"><?= $data["alamat"] ?></textarea>
                                <br><br>

                                <!-- SUBMIT -->
                                <button type="submit" name="simpan" class="submit">Simpan Perubahan</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- JavaScript -->
    <script src="../assets/js/script.js"></script>
</body>

</html>
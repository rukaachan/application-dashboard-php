<?php

session_start();

require_once("../controller/c_dashboard.php");

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
    <title>Form</title>
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

                <a href="dashboard_rplb_35.php">
                    <i class='bx bx-grid-alt'></i>
                    <span class="link_name">Dashboard</span>
                </a>

            </li>
            <li>

                <!-- dropdown -->

                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bx-collection'></i>
                        <span class="link_name">List Data</span>
                    </a>
                    <!-- <i class='bx bxs-chevron-down arrow'></i> -->
                </div>
                <ul class="sub-menu">
                    <li><a href="dasboard_listdata_rplb_35.php">List Data</a></li>
                </ul>
            </li>

            <!-- dropdown -->
            <li>
                <div class="iocn-link">
                    <a href="dasboard_detaildata_rplb_35.php">
                        <i class='bx bx-book-alt'></i>
                        <span class="link_name">Detail Data</span>
                    </a>
                    <!-- <i class='bx bxs-chevron-down arrow'></i> -->
                </div>
                <ul class="sub-menu">
                    <li><a href="dasboard_detaildata_rplb_35.php">Detail Data</a></li>
                </ul>
            </li>
            <li>

                <div class="iocn-link">
                    <a href="dasboard_form_rplb_35.php">
                        <i class='bx bx-pie-chart-alt-2'></i>
                        <span class="link_name">Form</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a href="dasboard_form_rplb_35.php">Form</a></li>
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

                <a href="../models/logout.php">
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
        <div class="tabel">

            <!-- Detail Data List -->
            <div class="data-list">
                <div class="content-data">
                    <h2>Form</h2>
                </div>

                <div class="container-form">
                    <form action="" method="POST" autocomplete="off" enctype="multipart/form-data">
                        <div class="box">
                            <div>
                                <!-- KODE BARANG -->
                                <label for="kbuku">Kode Barang : </label><br>
                                <input type="text" name="txtkode" id="kbuku" required><br>

                                <!-- JUDUL BARANG -->
                                <label for="jbuku">Judul Barang : </label><br>
                                <input type="text" name="txtjudul" id="jbuku" required><br>

                                <!-- PENERBIT BARANG -->
                                <label for="perbuku">Penerbit Barang : </label><br>
                                <input type="text" name="txtpenerbit" id="pbrang" required><br>

                                <!-- STOK BARANG -->
                                <label for="perbuku">Stok Barang : </label><br>
                                <input type="number" name="intstok" id="sbrang" required><br>

                                <!-- <select id="perbuku" name="perbuku">
                                    <option disabled selected hidden value="Penerbit">Penerbit</option>
                                    <option value="Data 1">Data </option>
                                    <option value="Data 1">Data </option>
                                    <option value="Data 1">Data </option>
                                    <option value="Data 1">Data </option>
                                    <option value="Data 1">Data </option>
                                </select> -->

                            </div>

                            <div class="space">


                                <!-- JENIS BARANG -->
                                <label for="jbarang">Jenis Barang :</label><br>
                                <input type="radio" name="rdjenis" id="data" value="Pakaian">Pakaian<br>
                                <input type="radio" name="rdjenis" id="data" value="Makeup">Makeup<br>
                                <input type="radio" name="rdjenis" id="data" value="Alat">Alat<br>
                                <input type="radio" name="rdjenis" id="data" value="Rumah Tangga">Rumah Tangga<br>
                                <input type="radio" name="rdjenis" id="data" value="Mainan">Mainan<br>
                                <input type="radio" name="rdjenis" id="data" value="Desain">Desain<br><br>

                                <!-- SENSITIVITAS BARANG -->
                                <label for="chbarang">Sensitivitas Barang :</label><br>
                                <input type="checkbox" name="cbarang" value="Mudah Pecah">Mudah Pecah<br>
                                <input type="checkbox" name="cbarang" value="Anti Pecah">Anti Pecah<br>
                            </div>

                            <div class="space">

                                <!-- GAMBAR BARANG -->
                                <label for="gbrang">Gambar Barang : </label><br>
                                <input type="file" name="file_barang" required>
                                <br><br><br><br>

                                <!-- CATATAN BARANG -->
                                <label for="ctatan">Catatan Barang : </label><br>
                                <textarea id="catbarang" name="catbarang" rows="3" cols="0"></textarea>
                                <br><br>

                                <!-- SUBMIT -->
                                <input type="submit" name="submit" required>
                            </div>
                    </form>
                </div>
            </div>
        </div>
        </div>

        <!-- JavaScript -->
        <script src="../assets/js/script.js"></script>
</body>

</html>

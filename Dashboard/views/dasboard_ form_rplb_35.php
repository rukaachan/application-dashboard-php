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
    <title>Form</title>
</head>

<body>

    <!-- sidebar -->
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

                <a href="dashboard_rplb_35.html">
                    <i class='bx bx-grid-alt'></i>
                    <span class="link_name">Dashboard</span>
                </a>

                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Category</a></li>
                </ul>
            </li>
            <li>

                <!-- dropdown -->

                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bx-collection'></i>
                        <span class="link_name">Category</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Menu</a></li>
                    <li><a href="dasboard_listdata_rplb_35.php">List Tabel</a></li>
                    <li><a href="dasboard_detaildata_rplb_35.php">Detail Data</a></li>
                    <li><a href="#">Menu</a></li>
                </ul>
            </li>

            <!-- dropdown -->
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bx-book-alt'></i>
                        <span class="link_name">Posts</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Posts</a></li>
                    <li><a href="#">Menu</a></li>
                    <li><a href="#">Menu</a></li>
                    <li><a href="#">Menu</a></li>
                </ul>
            </li>
            <li>

                <!-- menu -->

                <a href="#">
                    <i class='bx bx-pie-chart-alt-2'></i>
                    <span class="link_name">Analytics</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Analytics</a></li>
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

                <a href="#">
                    <i class='bx bx-log-out'></i>
                    <span class="link_name">Log out</span>
                </a>
            </li>
        </ul>
    </div>

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
                    <form action="" method="POST" autocomplete="off">
                        <div class="box">
                            <div>
                                <label for="kbuku">Kode Barang : </label><br>
                                <input type="text" name="kbuku" id="kbuku" required><br>
                                <label for="jbuku">Judul Barang : </label><br>
                                <input type="text" name="jbuku" id="jbuku" required><br>
                                <label for="perbuku">Penerbit Barang : </label><br>
                                <select id="perbuku" name="perbuku">
                                    <option disabled selected hidden value="Penerbit">Penerbit</option>
                                    <option value="Data 1">Data </option>
                                    <option value="Data 1">Data </option>
                                    <option value="Data 1">Data </option>
                                    <option value="Data 1">Data </option>
                                    <option value="Data 1">Data </option>
                                </select>
                            </div>

                            <div class="space">
                                <label for="jbarang">Jenis Barang :</label><br>
                                <input type="radio" name="data" id="data" value="Data">
                                <label for="Data">Data 1</label><br>
                                <input type="radio" name="data" id="data" value="Data">
                                <label for="Data">Data 2</label><br>
                                <input type="radio" name="data" id="data" value="Data">
                                <label for="Data">Data 3</label><br><br>

                                <label for="chbarang">Checkbox Barang :</label><br>
                                <input type="checkbox" name="" value="Data">
                                <label for="Data">Data 1</label><br>
                                <input type="checkbox" name="" value="Data">
                                <label for="Data">Data 1</label><br>
                                <input type="checkbox" name="" value="Data">
                                <label for="Data">Data 1</label><br>
                                <input type="checkbox" name="" value="Data">
                                <label for="Data">Data 1</label><br>
                            </div>

                            <div class="space">
                                <label for="gbrang">Gambar Barang : </label><br>
                                <input type="file" name="file_barang">
                                <br><br><br><br>
                                <label for="ctatan">Catatan Barang : </label><br>
                                <textarea id="catbarang" name="catbarang" rows="3" cols="0"></textarea>
                            </div>
                    </form>
                </div>


                <!-- <div class="text">
                            <label for="kelamin">Jenis Kelamin</label>
                            <input type="radio" name="gender" id="laki" value="Laki-Laki">
                            <label for="male">Laki-Laki</label> -->





            </div>
        </div>
        </div>

        <!-- JavaScript -->
        <script src="../assets/js/script.js"></script>
</body>

</html>
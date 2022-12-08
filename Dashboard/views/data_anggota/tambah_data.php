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
                    <a href="" onclick="alert('Anda harus memilih list data terlebih dahulu')">
                        <i class='bx bx-book-alt'></i>
                        <span class="link_name">Detail Data</span>
                    </a>
                    <!-- <i class='bx bxs-chevron-down arrow'></i> -->
                </div>
                <ul class="sub-menu">
                    <li><a href="" onclick="alert('Anda harus memilih list data terlebih dahulu')">Detail Data</a></li>
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
            <nav>

                <!-- Menu Siswa -->


                <!-- menu - sun -->
                <i class='bx bx-menu'></i>
                <div class="menu_nav">
                    <a href="http://localhost/bew_xirplb_1920_35_Taufik_NurFauzi/controller/c_siswa.php?aksi=list"><span class="links_side">Siswa</span></a>
                    <a href="http://localhost/bew_xirplb_1920_35_Taufik_NurFauzi/controller/c_kelas.php?aksi=list"><span class="links_side">Kelas</span></a>
                    <a href="http://localhost/bew_xirplb_1920_35_Taufik_NurFauzi/controller/c_anggota.php?aksi=list"><span class="links_side">Anggota</span></a>
                    <a href="http://localhost/bew_xirplb_1920_35_Taufik_NurFauzi/controller/c_absensi.php?aksi=list"><span class="links_side">Absensi</span></a>
                </div>
                <i class='bx bxs-sun'><span class="links_side">Switch</span></i>


                <!-- switch toggle -->
                <div class="mode-toggle">
                    <span class="switch"></span>
                </div>
                <i class='bx bxs-bell'><span class="links_side">Notify</span></i>
            </nav>
        </div>


        <!-- Tabel Detail Data List -->
        <div class="datalist">

            <!-- Detail Data List -->
            <div class="data-list">
                <div class="content-data">
                    <h2>Tambah</h2>
                </div>

                <div class="container-form">
                    <form action="<?= BASE ?>prosestambah" method="POST" autocomplete="off" enctype="">
                        <div class="box">
                            <div>
                                <!-- KODE -->
                                <label>Id_anggota</label><br>
                                <input type="int" name="int_anggota" required><br>

                                <!-- NAMA -->
                                <label>Id_kelas</label><br>
                                <input type="text" name="int_kelas" required><br>

                                <!-- Agama -->
                                <label>Nisn</label><br>
                                <input type="int" name="char_nisn" required><br>
                                <br>
                                <button type="submit" name="simpan" class="submit">Tambah Baru</button>

                            </div>
                            <!-- SUBMIT -->
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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>List Data</title>
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


        <!-- Tabel Data List -->
        <div class="datalist">

            <!-- Data List -->
            <div class="data-list">
                <div class="content-data">
                    <div class="box-toggle">
                        <h2>Absensi</h2>
                        <button class="btn">
                            <a href="<?= BASE ?>tambah" class="text-data">Add Data</a>
                        </button>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <td>Kehadiran</td>
                                <td>Nisn</td>
                                <td>Tanggal</td>
                                <td>Status</td>
                                <td>Actions</td>
                            </tr>
                        </thead>

                        <?php foreach ($data as $row) : ?>

                            <tbody>
                                <tr>
                                    <td><?= $row["id_kehadiran"]; ?></td>
                                    <td><?= $row["nisn"]; ?></td>
                                    <td><?= $row["tanggal"]; ?></td>
                                    <td><?= $row["status"]; ?></td>
                                    <td>
                                        <ul>
                                            <li><button class="detail"><a href="<?= BASE ?>detail&id=<?= $row["id_kehadiran"]; ?>">
                                                        <i class='bx bxs-book'></i>Detail
                                                    </a></button></li>
                                            <li><button class="edit"><a href="<?= BASE ?>edit&id=<?= $row["id_kehadiran"]; ?>">
                                                        <i class='bx bx-edit'></i> Edit</a></button></li>
                                            <li><button class="hapus"><a href="<?= BASE ?>hapus&id=<?= $row["id_kehadiran"]; ?>" onclick=" return confirm('yakin?');"><i class='bx bxs-trash'></i> Hapus</a></button></li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr></tr>
                            <?php endforeach; ?>
                            </tbody>
                    </table>
                </div>

                <!-- bottom-nav -->
                <div class="bottom-nav">
                    <button><a href="">
                            <i class='bx bx-arrow-back'></i> Back
                        </a></button>
                    <button>1</button>
                    <button><a href="">Next <i class='bx bx-right-arrow-alt'></i></a></button>
                </div>
            </div>

        </div>
    </section>

    <!-- JavaScript -->
    <script src="../assets/js/script.js"></script>
</body>

</html>
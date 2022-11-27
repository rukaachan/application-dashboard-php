<?php

session_start();

if (!isset($_SESSION["login"])) {
    header("Location: ../models/login.php");
    exit;
}

?>

<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
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

        <!-- main-text  -->
        <div class="main-text">
            <h4>Dashboard</h4>
        </div>

        <!-- Card -->
        <div class="home-card">
            <div class="overview-boxes">

                <!-- box Total Order -->
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Total Order</div>
                        <div class="number">40,876</div>
                        <div class="indicator">
                            <i class='bx bx-up-arrow-alt'></i>
                            <span class="text">Up from yesterday</span>
                        </div>
                    </div>
                    <i class='bx bx-cart-alt cart'></i>
                </div>
                <div class="box">

                    <!-- box Total Sales -->
                    <div class="right-side">
                        <div class="box-topic">Total Sales</div>
                        <div class="number">38,876</div>
                        <div class="indicator">
                            <i class='bx bx-up-arrow-alt'></i>
                            <span class="text">Up from yesterday</span>
                        </div>
                    </div>
                    <i class='bx bxs-cart-add cart two'></i>
                </div>
                <div class="box">

                    <!-- box Total Profit -->
                    <div class="right-side">
                        <div class="box-topic">Total Profit</div>
                        <div class="number">$12,876</div>
                        <div class="indicator">
                            <i class='bx bx-up-arrow-alt'></i>
                            <span class="text">Up from yesterday</span>
                        </div>
                    </div>
                    <i class='bx bx-cart cart three'></i>
                </div>
                <div class="box">

                    <!-- box Total Return -->
                    <div class="right-side">
                        <div class="box-topic">Total Return</div>
                        <div class="number">11,086</div>
                        <div class="indicator">
                            <i class='bx bx-down-arrow-alt down'></i>
                            <span class="text">Down From Today</span>
                        </div>
                    </div>
                    <i class='bx bxs-cart-download cart four'></i>
                </div>
            </div>
        </div>

        <!-- chart and report -->

        <div class="data">
            <div class="content-data">
                <!-- make box -->
                <div class="head">
                    <h3 class="main-text">Report</h3>
                </div>

                <!-- report chart -->
                <div class="chart">
                    <div id="chart"></div>
                </div>
            </div>
            <div class="content-data-donut">
                <div class="head">
                    <h3 class="main-text">Report</h3>
                </div>
                <div class="donut">
                    <div id="donut"></div>
                </div>
            </div>
        </div>

    </section>


    <!-- footer -->

    <section class="footer">
        <div class="home-footer">
            <h3>Administrator</h3>
        </div>
    </section>


    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="../assets/js/script.js"></script>
</body>

</html>
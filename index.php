<?php
include_once ("./header.php");
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

<style>
    body {
        margin: 0px !important;
        overflow-x: hidden;
    }

    /* .container-fluid {
        --bs-gutter-x: 0px !important;
    } */

    .slide-menu {
        display: inline-block;
        /* Ensure the div fits the content */
        vertical-align: top;
        /* Align properly with other items */
    }

    .slide-menu-a {
        display: block;
        background: #C30202;
        padding: 10px;
        text-align: center;
        color: white;
        border-radius: 12px;
    }

    .slide-menu-a:hover {
        background: pink;
    }

    .owl-dots {
        display: none;
    }

    .owl-carousel {
        width: 1250px;
        display: flex;
        margin-left: auto;
        margin-top: 32px;
        margin-right: 40px;
    }

    .owl-item {
        width: 150px !important;
        /* Set the width of the carousel items */
    }
</style>

<body>

    <!-- Set up your HTML -->

    <div class="owl-carousel owl-theme">
        <div class="item" data-merge="1">
            <a href="#" class=" btn  slide-menu-a">
                #Trending
            </a>
        </div>
        <div class="item" data-merge="1">
            <a href="#" class=" btn  slide-menu-a">
                World
            </a>
        </div>
        <div class="item" data-merge="1">
            <a href="#" class=" btn  slide-menu-a">
                India
            </a>
        </div>
        <div class="item" data-merge="1">
            <a href="#" class=" btn  slide-menu-a">
                Tamil nadu
            </a>
        </div>
        <div class="item" data-merge="1">
            <a href="#" class=" btn  slide-menu-a">
                Politics
            </a>
        </div>
        <div class="item" data-merge="1">
            <a href="#" class=" btn  slide-menu-a">
                Cinema
            </a>
        </div>
        <div class="item" data-merge="1">
            <a href="#" class=" btn  slide-menu-a">
                Technology
            </a>
        </div>
        <div class="item" data-merge="1">
            <a href="#" class=" btn  slide-menu-a">
                Sports
            </a>
        </div>
        <div class="item" data-merge="1">
            <a href="#" class=" btn  slide-menu-a">
                Astrology
            </a>
        </div>
        <div class="item" data-merge="1">
            <a href="#" class=" btn  slide-menu-a">
                Lifestyle
            </a>
        </div>
        <div class="item" data-merge="1">
            <a href="#" class=" btn  slide-menu-a">
                Novel
            </a>
        </div>

    </div>

    <!-- frames -->

    <div class="container-fluid ad-banner-frame">


        <!-- recent news frame  -->
        <?php
        include_once ("recentframe.php");
        ?>
        <!-- Trending now post frame  -->
        <?php
        include_once ("trendingframe.php");
        ?>

        <!-- Sport API frame -->
        <?php
        include_once ("sportapiframe.php");
        ?>

        <!-- Popular post frame -->
        <?php
        include_once ("popularframe.php");
        ?>

        <!-- Weather api -->
        <?php
        include_once ("weatherapi.php");
        ?>

        <!-- Top post -->
        <?php
        include_once ("toppostframe.php");
        ?>

        <!-- Footer -->
        <?php
        include_once ("footer.php");
        ?>

    </div>

    <?php
    include_once ("./footerlink.php");
    ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            items: 6,
            loop: true,
            margin: 10,
            merge: true,

            responsive: {
                678: {
                    mergeFit: true
                },
                1000: {
                    mergeFit: false
                }
            }
        })
    </script>

</body>

</html>
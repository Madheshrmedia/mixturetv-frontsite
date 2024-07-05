<?php
include_once ("./header.php");
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

<style>
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



    /* recent frame  */
    .card {
        position: relative;
        overflow: hidden;
        width: 100%;
        /* Ensure the card takes the full width of the container */
        border-radius: 10px;
        /* Rounded corners */
    }

    .card-img-top {
        width: 100%;
        height: auto;
        display: block;
    }

    .card-body {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        background: rgba(0, 0, 0, 0.5);
        /* Semi-transparent background */
        color: white;
        padding: 10px;
        box-sizing: border-box;
    }

    .category-label {
        position: absolute;
        top: 10px;
        right: 10px;
        background: white;
        color: red;
        padding: 5px 10px;
        border-radius: 5px;
        font-size: 14px;
    }

    .card-title {
        margin: 0;
        font-size: 24px;
        font-weight: bold;
    }

    .card-text {
        margin-top: 10px;
        font-size: 14px;
    }

    .ad-banner-frame {
        margin-top: 35px;
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
        <div class="row">

            <!-- AD banners -->
            <div class="col-md-1">
                <img src="./image/adbanners.png" class="image-fluid ad-banner-img img-fluid" alt="ad-banner">
            </div>

            <!-- Recent frame  -->
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card">
                            <img src="./image/card-img.png" class="card-img-top" alt="Card image">
                            <div class="category-label">Sports</div>
                            <div class="card-body">
                                <h5 class="card-title">How to Drive a Car Safely</h5>
                                <p class="card-text">Ah, The Joy Of The Open Road—It’s A Good Feeling. But If You’re New
                                    To Driving, Follow These Tips For A Safe Journey.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <img src="./image/card-img.png" class="card-img-top" alt="Card image">
                            <div class="category-label">Sports</div>
                            <div class="card-body">
                                <h5 class="card-title">How to Drive a Car Safely</h5>
                                <p class="card-text">Ah, The Joy Of The Open Road—It’s A Good Feeling. But If You’re New
                                    To Driving, Follow These Tips For A Safe Journey.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <img src="./image/card-img.png" class="card-img-top" alt="Card image">
                            <div class="category-label">Sports</div>
                            <div class="card-body">
                                <h5 class="card-title">How to Drive a Car Safely</h5>
                                <p class="card-text">Ah, The Joy Of The Open Road—It’s A Good Feeling. But If You’re New
                                    To Driving, Follow These Tips For A Safe Journey.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- AD banners -->
            <div class="col-md-1">
                <img src="./image/adbanners.png" class="image-fluid ad-banner-img img-fluid" alt="ad-banner">
            </div>
        </div>
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
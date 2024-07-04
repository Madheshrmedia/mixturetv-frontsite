<?php
include_once ("./header.php");
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">


<style>
    .slide-menu-a {
        background: red;
    }

    .slide-menu-a:hover {
        background: pink;
    }
</style>

<body>

    <!-- Set up your HTML -->
    <div class="owl-carousel">
        <div class="slide-menu">
            <a href="#" class=" btn  slide-menu-a">
                #trending1
            </a>
        </div>
        <div class="slide-menu">
            <a href="#" class=" btn  slide-menu-a">
                #trending2
            </a>
        </div>
        <div class="slide-menu">
            <a href="#" class=" btn  slide-menu-a">
                #trending3
            </a>
        </div>
        <div class="slide-menu">
            <a href="#" class=" btn  slide-menu-a">
                #trending4
            </a>
        </div>
        <div class="slide-menu">
            <a href="#" class=" btn  slide-menu-a">
                #trending5
            </a>
        </div>
        <div class="slide-menu">
            <a href="#" class=" btn  slide-menu-a">
                #trending6
            </a>
        </div>
        <div class="slide-menu">
            <a href="#" class=" btn  slide-menu-a">
                #trending7
            </a>
        </div>
        <div class="slide-menu">
            <a href="#" class=" btn  slide-menu-a">
                #trending8
            </a>
        </div>
        <div class="slide-menu">
            <a href="#" class=" btn  slide-menu-a">
                #trending9
            </a>
        </div>
        <div class="slide-menu">
            <a href="#" class=" btn  slide-menu-a">
                #trending10
            </a>
        </div>
        <div class="slide-menu">
            <a href="#" class=" btn  slide-menu-a">
                #trending11
            </a>
        </div>
        <div class="slide-menu">
            <a href="#" class=" btn  slide-menu-a">
                #trending12
            </a>
        </div>
    </div>


    <?php
    include_once ("./footerlink.php");
    ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 3,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 3,
                    nav: false
                },
                1000: {
                    items: 14,
                    nav: true,
                    loop: false
                }
            }
        })
    </script>

</body>

</html>
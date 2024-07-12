<style>
    .footer-container {
        background: #FFEAEA;
    }

    ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    li {
        margin-bottom: 10px;
    }

    .footer-icons {
        width: 65px;
    }

    .main-replace1 {
        display: none;
    }

    .main-replace2 {
        display: none;
    }

    .main-replace3 {
        display: none;
    }

    .main-replace4 {
        display: none;
    }

    .main-replace5 {
        display: none;
    }

    .footer-logo-container {
        text-align: center;
    }

    .footer-logo {
        width: 210px;
    }

    .footer-title {
        font-weight: 400;
    }

    .footer-container {
        font-size: 14px;
        font-weight: 200;
        line-height: 20px;
        color: #3E3232 !important;
        text-align: justify;
    }

    .category-link {
        text-decoration: none;
    }

    .copyrights-row {
        background: #FFBDBD;
    }

    .copyrights-content {
        margin-top: 0.75rem !important;
        margin-bottom: 0.75rem !important;
        font-size: 14px;
        font-weight: 300;
    }
</style>
<footer>

    <div class="container-fluid mt-5" style="--bs-gutter-x:0px !important">
        <div class="row footer-container pt-5">
            <div class="col-md-3 footer-logo-container">
                <img src="./image/mixture-tvlogo.png" class="img-fluid footer-logo" alt="top-in-news-chennai">
            </div>
            <div class="col-md-3">
                <h4 class="footer-title">
                    Mixture Tv News
                </h4>
                <p class="footer-content pt-3">
                    Mixture TV is your go-to destination for the latest news and entertainment. Stay informed with our
                    up-to-date news coverage and enjoy a wide variety of entertainment content, including movies, TV
                    shows, and exclusive features. Discover the perfect blend of information and fun, all in one place.
                    Welcome to Mixture TV!
                </p>
            </div>
            <div class="col-md-3">
                <div class="categories">
                    <div class="row">

                        <div class="col-md-10 mx-auto">
                            <h4 class="footer-title ">
                                Categories
                            </h4>
                            <div class="row pt-3">
                                <div class="col-md-6">
                                    <ul>
                                        <li>
                                            <a href="#" class="category-link">
                                                World
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="category-link">
                                                India
                                            </a>

                                        </li>
                                        <li>
                                            <a href="#" class="category-link">
                                                Tamil nadu
                                            </a>

                                        </li>
                                        <li>
                                            <a href="#" class="category-link">
                                                Politics
                                            </a>

                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                        <li>
                                            <a href="#" class="category-link">
                                                Cinema
                                            </a>

                                        </li>
                                        <li>
                                            <a href="#" class="category-link">
                                                Technology
                                            </a>

                                        </li>
                                        <li>
                                            <a href="#" class="category-link">
                                                Sports
                                            </a>

                                        </li>
                                        <li>
                                            <a href="#" class="category-link">
                                                Food
                                            </a>

                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="row">
                    <div class="col-md-8 ">
                        <h4 class="footer-title ">
                            Follow on
                        </h4>
                        <div class="row pt-3">
                            <div class="col-md-4 ">
                                <img src="./image/icon1.png" class="footer-icons main1" alt="trending-in-news-chennai">
                                <img src="./image/icon-1.png" class="footer-icons main-replace1"
                                    alt="trending-in-news-chennai">
                            </div>
                            <div class="col-md-4 ">
                                <img src="./image/icon2.png" class="footer-icons main2" alt="trending-in-news-chennai">
                                <img src="./image/icon-2.png" class="footer-icons main-replace2"
                                    alt="trending-in-news-chennai">
                            </div>
                            <div class="col-md-4 ">
                                <img src="./image/icon3.png" class="footer-icons main3" alt="trending-in-news-chennai">
                                <img src="./image/icon-3.png" class="footer-icons main-replace3"
                                    alt="trending-in-news-chennai">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-8 ">
                        <div class="row">
                            <div class="col-md-4 ">
                                <img src="./image/icon4.png" class="footer-icons main4" alt="trending-in-news-chennai">
                                <img src="./image/icon-4.png" class="footer-icons main-replace4"
                                    alt="trending-in-news-chennai">
                            </div>
                            <div class="col-md-4 ">
                                <img src="./image/icon5.png" class="footer-icons main5" alt="trending-in-news-chennai">
                                <img src="./image/icon-5.png" class="footer-icons main-replace5"
                                    alt="trending-in-news-chennai">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="copyrights-content my-5">
                <!-- <div class="container"> -->
                <div class="row copyrights-row my-3">
                    <div class="col-md-11 mx-auto">
                        <div class="row">
                            <div class="col-md-6">
                                <p class="copyrights-content">
                                    Privacy Policy | Terms & Conditions
                                </p>
                            </div>
                            <div class="col-md-6">
                                <p class="copyrights-content text-end">
                                    All Copyright (c) <?php echo date("Y"); ?> Reserved
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- </div> -->
            </div>
        </div>


    </div>

    <script>
        $(document).ready(function () {
            $(".main1").hover(
                function () {
                    // Mouse enters the .main element
                    $(".main1").hide();
                    $(".main-replace1").show();
                }
            );

            $(".main-replace1").mouseleave(function () {
                // Mouse leaves the .main-replace element
                $(".main1").show();
                $(".main-replace1").hide();
            });

            $(".main2").hover(
                function () {
                    // Mouse enters the .main element
                    $(".main2").hide();
                    $(".main-replace2").show();
                }
            );

            $(".main-replace2").mouseleave(function () {
                // Mouse leaves the .main-replace element
                $(".main2").show();
                $(".main-replace2").hide();
            });

            $(".main3").hover(
                function () {
                    // Mouse enters the .main element
                    $(".main3").hide();
                    $(".main-replace3").show();
                }
            );

            $(".main-replace3").mouseleave(function () {
                // Mouse leaves the .main-replace element
                $(".main3").show();
                $(".main-replace3").hide();
            });

            $(".main4").hover(
                function () {
                    // Mouse enters the .main element
                    $(".main4").hide();
                    $(".main-replace4").show();
                }
            );

            $(".main-replace4").mouseleave(function () {
                // Mouse leaves the .main-replace element
                $(".main4").show();
                $(".main-replace4").hide();
            });

            $(".main5").hover(
                function () {
                    // Mouse enters the .main element
                    $(".main5").hide();
                    $(".main-replace5").show();
                }
            );

            $(".main-replace5").mouseleave(function () {
                // Mouse leaves the .main-replace element
                $(".main5").show();
                $(".main-replace5").hide();
            });

        });
    </script>
</footer>
<?php
include_once ("./header.php");
?>

<style>
    .nav-direction span {
        color: #a6a6a6;
    }

    .category-banner {
        background: #FFF5EA;
        border-radius: 5px;
    }

    .category-banner-img {
        border-radius: 15px;
    }

    .category_post {
        margin-top: 40px;
    }

    .category-detail-frame {
        box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15) !important;
        border-radius: 10px;
        padding: 5px;
    }

    .category_card-body {
        bottom: 10px;
        left: 10px;
        width: 100%;
        background: rgba(255, 245, 234, 0.9);
        color: black;
        padding: 10px;
        box-sizing: border-box;
        border-radius: 10px;
        width: calc(100% - 20px);
    }

    .category_frame_card-title {
        margin: 0;
        font-size: 16px;
        font-weight: bold;
        font-weight: 500;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 1;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .category_frame_card-text {
        margin-top: 5px;
        font-size: 13px;
        font-weight: 300;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .category_frame_maincard {
        padding: 15px 10px;
    }

    .category_frame_mainimg {
        border-radius: 5px;
    }

    .category-title {
        font-size: 30px;
        text-transform: uppercase;
    }
</style>

<body>
    <div class="container mt-5 px-5">
        <p class="nav-direction">
            Home > <span>Sport</span>
        </p>

        <div class="row">
            <div class="col-md-12">
                <div class="card category-banner">
                    <img src="./image/category-bg.png" class="card-img-top category-banner-img p-2"
                        alt="trending-sport-news">

                    <div class="card-body category_card-body d-flex">
                        <img src="./image/sportsicon.png" width="50" class="my-auto" alt="trending-sports-news">
                        <div class="card-content my-auto d-flex mx-auto">
                            <h5 class="card-title category-title">Sport</h5>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row category_post mb-4">

            <div class="col-md-12">
                <h4 class="text-start my-4">
                    Latest posts
                </h4>
            </div>
            <div class="col-md-3">
                <div class="card category-detail-frame">
                    <img src="./image/trending-frame.png" class="card-img-top category_frame_mainimg"
                        alt="trending-news-in-tamilnadu">
                    <div class="card-body category_frame_maincard">
                        <h5 class="card-title category_frame_card-title">Opening Day of Boating Season, Seattle WA</h5>
                        <p class="card-text category_frame_card-text">Some quick example text to build on the card title
                            and make up the
                            bulk of the card's content.</p>
                    </div>
                    <div class="card-body category_card-body mx-auto d-flex">
                        <img src="./image/sportsicon.png" width="50" class="my-auto" alt="trending-sports-news">
                        <div class="card-content my-auto ms-3">
                            <h5 class="card-title category_frame_card-title">Sport</h5>
                            <p class="card-text category_frame_card-text d-flex"> August 18 , 2023</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card category-detail-frame">
                    <img src="./image/trending-frame.png" class="card-img-top category_frame_mainimg"
                        alt="trending-news-in-tamilnadu">
                    <div class="card-body category_frame_maincard">
                        <h5 class="card-title category_frame_card-title">Opening Day of Boating Season, Seattle WA</h5>
                        <p class="card-text category_frame_card-text">Some quick example text to build on the card title
                            and make up the
                            bulk of the card's content.</p>
                    </div>
                    <div class="card-body category_card-body mx-auto d-flex">
                        <img src="./image/sportsicon.png" width="50" class="my-auto" alt="trending-sports-news">
                        <div class="card-content my-auto ms-3">
                            <h5 class="card-title category_frame_card-title">Sport</h5>
                            <p class="card-text category_frame_card-text d-flex"> August 18 , 2023</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card category-detail-frame">
                    <img src="./image/trending-frame.png" class="card-img-top category_frame_mainimg"
                        alt="trending-news-in-tamilnadu">
                    <div class="card-body category_frame_maincard">
                        <h5 class="card-title category_frame_card-title">Opening Day of Boating Season, Seattle WA</h5>
                        <p class="card-text category_frame_card-text">Some quick example text to build on the card title
                            and make up the
                            bulk of the card's content.</p>
                    </div>
                    <div class="card-body category_card-body mx-auto d-flex">
                        <img src="./image/sportsicon.png" width="50" class="my-auto" alt="trending-sports-news">
                        <div class="card-content my-auto ms-3">
                            <h5 class="card-title category_frame_card-title">Sport</h5>
                            <p class="card-text category_frame_card-text d-flex"> August 18 , 2023</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card category-detail-frame">
                    <img src="./image/trending-frame.png" class="card-img-top category_frame_mainimg"
                        alt="trending-news-in-tamilnadu">
                    <div class="card-body category_frame_maincard">
                        <h5 class="card-title category_frame_card-title">Opening Day of Boating Season, Seattle WA</h5>
                        <p class="card-text category_frame_card-text">Some quick example text to build on the card title
                            and make up the
                            bulk of the card's content.</p>
                    </div>
                    <div class="card-body category_card-body mx-auto d-flex">
                        <img src="./image/sportsicon.png" width="50" class="my-auto" alt="trending-sports-news">
                        <div class="card-content my-auto ms-3">
                            <h5 class="card-title category_frame_card-title">Sport</h5>
                            <p class="card-text category_frame_card-text d-flex"> August 18 , 2023</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row mb-4">
            <div class="col-md-3">
                <div class="card category-detail-frame">
                    <img src="./image/trending-frame.png" class="card-img-top category_frame_mainimg"
                        alt="trending-news-in-tamilnadu">
                    <div class="card-body category_frame_maincard">
                        <h5 class="card-title category_frame_card-title">Opening Day of Boating Season, Seattle WA</h5>
                        <p class="card-text category_frame_card-text">Some quick example text to build on the card title
                            and make up the
                            bulk of the card's content.</p>
                    </div>
                    <div class="card-body category_card-body mx-auto d-flex">
                        <img src="./image/sportsicon.png" width="50" class="my-auto" alt="trending-sports-news">
                        <div class="card-content my-auto ms-3">
                            <h5 class="card-title category_frame_card-title">Sport</h5>
                            <p class="card-text category_frame_card-text d-flex"> August 18 , 2023</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card category-detail-frame">
                    <img src="./image/trending-frame.png" class="card-img-top category_frame_mainimg"
                        alt="trending-news-in-tamilnadu">
                    <div class="card-body category_frame_maincard">
                        <h5 class="card-title category_frame_card-title">Opening Day of Boating Season, Seattle WA</h5>
                        <p class="card-text category_frame_card-text">Some quick example text to build on the card title
                            and make up the
                            bulk of the card's content.</p>
                    </div>
                    <div class="card-body category_card-body mx-auto d-flex">
                        <img src="./image/sportsicon.png" width="50" class="my-auto" alt="trending-sports-news">
                        <div class="card-content my-auto ms-3">
                            <h5 class="card-title category_frame_card-title">Sport</h5>
                            <p class="card-text category_frame_card-text d-flex"> August 18 , 2023</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card category-detail-frame">
                    <img src="./image/trending-frame.png" class="card-img-top category_frame_mainimg"
                        alt="trending-news-in-tamilnadu">
                    <div class="card-body category_frame_maincard">
                        <h5 class="card-title category_frame_card-title">Opening Day of Boating Season, Seattle WA</h5>
                        <p class="card-text category_frame_card-text">Some quick example text to build on the card title
                            and make up the
                            bulk of the card's content.</p>
                    </div>
                    <div class="card-body category_card-body mx-auto d-flex">
                        <img src="./image/sportsicon.png" width="50" class="my-auto" alt="trending-sports-news">
                        <div class="card-content my-auto ms-3">
                            <h5 class="card-title category_frame_card-title">Sport</h5>
                            <p class="card-text category_frame_card-text d-flex"> August 18 , 2023</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card category-detail-frame">
                    <img src="./image/trending-frame.png" class="card-img-top category_frame_mainimg"
                        alt="trending-news-in-tamilnadu">
                    <div class="card-body category_frame_maincard">
                        <h5 class="card-title category_frame_card-title">Opening Day of Boating Season, Seattle WA</h5>
                        <p class="card-text category_frame_card-text">Some quick example text to build on the card title
                            and make up the
                            bulk of the card's content.</p>
                    </div>
                    <div class="card-body category_card-body mx-auto d-flex">
                        <img src="./image/sportsicon.png" width="50" class="my-auto" alt="trending-sports-news">
                        <div class="card-content my-auto ms-3">
                            <h5 class="card-title category_frame_card-title">Sport</h5>
                            <p class="card-text category_frame_card-text d-flex"> August 18 , 2023</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-md-3">
                <div class="card category-detail-frame">
                    <img src="./image/trending-frame.png" class="card-img-top category_frame_mainimg"
                        alt="trending-news-in-tamilnadu">
                    <div class="card-body category_frame_maincard">
                        <h5 class="card-title category_frame_card-title">Opening Day of Boating Season, Seattle WA</h5>
                        <p class="card-text category_frame_card-text">Some quick example text to build on the card title
                            and make up the
                            bulk of the card's content.</p>
                    </div>
                    <div class="card-body category_card-body mx-auto d-flex">
                        <img src="./image/sportsicon.png" width="50" class="my-auto" alt="trending-sports-news">
                        <div class="card-content my-auto ms-3">
                            <h5 class="card-title category_frame_card-title">Sport</h5>
                            <p class="card-text category_frame_card-text d-flex"> August 18 , 2023</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card category-detail-frame">
                    <img src="./image/trending-frame.png" class="card-img-top category_frame_mainimg"
                        alt="trending-news-in-tamilnadu">
                    <div class="card-body category_frame_maincard">
                        <h5 class="card-title category_frame_card-title">Opening Day of Boating Season, Seattle WA</h5>
                        <p class="card-text category_frame_card-text">Some quick example text to build on the card title
                            and make up the
                            bulk of the card's content.</p>
                    </div>
                    <div class="card-body category_card-body mx-auto d-flex">
                        <img src="./image/sportsicon.png" width="50" class="my-auto" alt="trending-sports-news">
                        <div class="card-content my-auto ms-3">
                            <h5 class="card-title category_frame_card-title">Sport</h5>
                            <p class="card-text category_frame_card-text d-flex"> August 18 , 2023</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card category-detail-frame">
                    <img src="./image/trending-frame.png" class="card-img-top category_frame_mainimg"
                        alt="trending-news-in-tamilnadu">
                    <div class="card-body category_frame_maincard">
                        <h5 class="card-title category_frame_card-title">Opening Day of Boating Season, Seattle WA</h5>
                        <p class="card-text category_frame_card-text">Some quick example text to build on the card title
                            and make up the
                            bulk of the card's content.</p>
                    </div>
                    <div class="card-body category_card-body mx-auto d-flex">
                        <img src="./image/sportsicon.png" width="50" class="my-auto" alt="trending-sports-news">
                        <div class="card-content my-auto ms-3">
                            <h5 class="card-title category_frame_card-title">Sport</h5>
                            <p class="card-text category_frame_card-text d-flex"> August 18 , 2023</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card category-detail-frame">
                    <img src="./image/trending-frame.png" class="card-img-top category_frame_mainimg"
                        alt="trending-news-in-tamilnadu">
                    <div class="card-body category_frame_maincard">
                        <h5 class="card-title category_frame_card-title">Opening Day of Boating Season, Seattle WA</h5>
                        <p class="card-text category_frame_card-text">Some quick example text to build on the card title
                            and make up the
                            bulk of the card's content.</p>
                    </div>
                    <div class="card-body category_card-body mx-auto d-flex">
                        <img src="./image/sportsicon.png" width="50" class="my-auto" alt="trending-sports-news">
                        <div class="card-content my-auto ms-3">
                            <h5 class="card-title category_frame_card-title">Sport</h5>
                            <p class="card-text category_frame_card-text d-flex"> August 18 , 2023</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-md-3">
                <div class="card category-detail-frame">
                    <img src="./image/trending-frame.png" class="card-img-top category_frame_mainimg"
                        alt="trending-news-in-tamilnadu">
                    <div class="card-body category_frame_maincard">
                        <h5 class="card-title category_frame_card-title">Opening Day of Boating Season, Seattle WA</h5>
                        <p class="card-text category_frame_card-text">Some quick example text to build on the card title
                            and make up the
                            bulk of the card's content.</p>
                    </div>
                    <div class="card-body category_card-body mx-auto d-flex">
                        <img src="./image/sportsicon.png" width="50" class="my-auto" alt="trending-sports-news">
                        <div class="card-content my-auto ms-3">
                            <h5 class="card-title category_frame_card-title">Sport</h5>
                            <p class="card-text category_frame_card-text d-flex"> August 18 , 2023</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card category-detail-frame">
                    <img src="./image/trending-frame.png" class="card-img-top category_frame_mainimg"
                        alt="trending-news-in-tamilnadu">
                    <div class="card-body category_frame_maincard">
                        <h5 class="card-title category_frame_card-title">Opening Day of Boating Season, Seattle WA</h5>
                        <p class="card-text category_frame_card-text">Some quick example text to build on the card title
                            and make up the
                            bulk of the card's content.</p>
                    </div>
                    <div class="card-body category_card-body mx-auto d-flex">
                        <img src="./image/sportsicon.png" width="50" class="my-auto" alt="trending-sports-news">
                        <div class="card-content my-auto ms-3">
                            <h5 class="card-title category_frame_card-title">Sport</h5>
                            <p class="card-text category_frame_card-text d-flex"> August 18 , 2023</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card category-detail-frame">
                    <img src="./image/trending-frame.png" class="card-img-top category_frame_mainimg"
                        alt="trending-news-in-tamilnadu">
                    <div class="card-body category_frame_maincard">
                        <h5 class="card-title category_frame_card-title">Opening Day of Boating Season, Seattle WA</h5>
                        <p class="card-text category_frame_card-text">Some quick example text to build on the card title
                            and make up the
                            bulk of the card's content.</p>
                    </div>
                    <div class="card-body category_card-body mx-auto d-flex">
                        <img src="./image/sportsicon.png" width="50" class="my-auto" alt="trending-sports-news">
                        <div class="card-content my-auto ms-3">
                            <h5 class="card-title category_frame_card-title">Sport</h5>
                            <p class="card-text category_frame_card-text d-flex"> August 18 , 2023</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card category-detail-frame">
                    <img src="./image/trending-frame.png" class="card-img-top category_frame_mainimg"
                        alt="trending-news-in-tamilnadu">
                    <div class="card-body category_frame_maincard">
                        <h5 class="card-title category_frame_card-title">Opening Day of Boating Season, Seattle WA</h5>
                        <p class="card-text category_frame_card-text">Some quick example text to build on the card title
                            and make up the
                            bulk of the card's content.</p>
                    </div>
                    <div class="card-body category_card-body mx-auto d-flex">
                        <img src="./image/sportsicon.png" width="50" class="my-auto" alt="trending-sports-news">
                        <div class="card-content my-auto ms-3">
                            <h5 class="card-title category_frame_card-title">Sport</h5>
                            <p class="card-text category_frame_card-text d-flex"> August 18 , 2023</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
        include_once ("pagination.php");
        ?>

    </div>

    <?php
    include_once ("./footerlink.php");
    ?>

    <!-- Footer -->
    <?php
    include_once ("footer.php");
    ?>
</body>

</html>
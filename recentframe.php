<style>
    /* recent frame  */
    .recent_frame_card {
        position: relative;
        overflow: hidden;
        width: 100%;
        /* Ensure the card takes the full width of the container */
        border-radius: 10px;
        /* Rounded corners */
    }

    .recent_frame_card-img-top {
        width: 100%;
        height: auto;
        display: block;
    }

    .recent_frame_card-body {
        position: absolute;
        bottom: 10px;
        left: 10px;
        width: 100%;
        background: rgba(255, 245, 234, 0.9);
        color: black;
        padding: 15px;
        box-sizing: border-box;
        border-radius: 10px;
        width: calc(100% - 20px);
    }

    .card-body>* {
        margin-top: -10px;
        /* Adjust this value to fine-tune the gap */
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
        font-size: 16px;
        font-weight: bold;
        font-weight: 500;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 1;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .card-text {
        margin-top: 10px;
        font-size: 13px;
        font-weight: 300;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .ad-banner-frame {
        margin-top: 35px;
    }

    .recent_post_row {
        height: 345px !important;
    }

    .recent_post_clm {
        height: 100%;
    }

    .recent_post_clm .card {
        height: 100%;
    }
</style>

<div class="row">

    <!-- AD banners -->
    <div class="col-md-1">
        <img src="./image/adbanners.png" class="image-fluid ad-banner-img img-fluid" alt="ad-banner">
    </div>

    <!-- Recent frame  -->
    <div class="col-md-10">

        <div class="row recent_post_row">

            <div class="col-md-12">
                <h4 class="text-start">
                    Recent
                </h4>
            </div>
            <div class="col-md-3 recent_post_clm">
                <div class="card recent_frame_card">
                    <img src="./image/card-img.png" class="card-img-top recent_frame_card-img-top" alt="Card image">
                    <div class="category-label">Sports</div>
                    <div class="card-body recent_frame_card-body">
                        <h5 class="card-title">How to Drive a Car Safely</h5>
                        <p class="card-text">Ah, The Joy Of The Open Road—It’s A Good Feeling. But If You’re New
                            To Driving, Follow These Tips For A Safe Journey.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 recent_post_clm">
                <div class="card recent_frame_card">
                    <img src="./image/card-img.png" class="card-img-top recent_frame_card-img-top" alt="Card image">
                    <div class="category-label">Sports</div>
                    <div class="card-body recent_frame_card-body">
                        <h5 class="card-title">How to Drive a Car Safely</h5>
                        <p class="card-text">Ah, The Joy Of The Open Road—It’s A Good Feeling. But If You’re New
                            To Driving, Follow These Tips For A Safe Journey.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 recent_post_clm">
                <div class="card recent_frame_card">
                    <img src="./image/card-img.png" class="card-img-top img-fluid recent_frame_card-img-top"
                        alt="Card image">
                    <div class="category-label">Sports</div>
                    <div class="card-body recent_frame_card-body">
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
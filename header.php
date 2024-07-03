<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MIXTURE TV</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <script src="./js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


    <style>
        * {
            font-family: "Inter", sans-serif;
        }

        .navbar-background {
            background-color: #FF0808;
            /* Fallback color */
            background-image: linear-gradient(to bottom, #FF0808, #990505);
        }

        .navbar-brand {
            width: 120px;
            height: 60px;
        }

        .navbar-brand img {
            width: 120px;
            margin-top: -10px;
            margin-left: 10px;
        }

        .nav-link {
            font-size: 16px;
            color: white;
        }

        .navbar-nav .nav-item {
            margin-left: 25px;
            /* Adjust the value as needed */
        }

        .header-search {
            border: 1px solid white;
            background: white;
            border-radius: 8px;
        }

        .search-nav::placeholder {
            color: #3E3232;
            /* Change to your preferred color */
            font-size: 13px;
        }

        .dropdown-menu {
            background: white;
        }
    </style>
</head>

<div class="navbar_div ">
    <!-- <nav class="navbar navbar-expand sticky-top navbar-background">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="./image/mixture-tvlogo.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">about us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">contact us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blogs</a>
                    </li>

                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav> -->

    <nav class="navbar navbar-expand-lg navbar-background">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="./image/mixture-tvlogo.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">about us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">contact us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blogs</a>
                    </li>

                </ul>
                <form class="d-flex">
                    <div class="input-group header-search">
                        <input class="form-control me-2 search-nav" type="search" placeholder="Search anything"
                            aria-label="Search">
                        <span class="input-group-text"><i class="fas fa-search"></i></span>
                    </div>
                </form>

                <ul class="navbar-nav ">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-globe"></i> Language
                        </a>
                        <ul class="dropdown-menu " aria-labelledby="languageDropdown">
                            <li>
                                <a class="dropdown-item" href="#">
                                    <img src="https://flagcdn.com/us.svg" width="20" alt="English"> English
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <img src="https://flagcdn.com/in.svg" width="20" alt="Français"> தமிழ்
                                </a>
                            </li>
                        </ul>

                    </li>
                </ul>


            </div>
        </div>
    </nav>

</div>
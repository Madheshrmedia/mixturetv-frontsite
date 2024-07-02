<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MIXTURE TV</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <script src="./js/bootstrap.bundle.min.js"></script>

    <style>
        .navbar-background{
            background-color: #FF0808; /* Fallback color */
            background-image: linear-gradient(to bottom, #FF0808, #990505);
        }
        .navbar-brand img{
            width: 74px;
        }
        .nav-link{
            font-size: 20px;
        }
    </style>
</head>

<div class="navbar_div ">
    <nav class="navbar navbar-expand navbar-background">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="./image/mixture-tvlogo.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
    </nav>
</div>
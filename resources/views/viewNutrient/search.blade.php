<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>NutriTransform: Uncovering the Science of Cooking</title>
    <link rel="icon" type="image/x-icon" href="/favicon.ico"/>
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com"/>
    <link href="https://fonts.googleapis.com/css2?family=Tinos:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap"
          rel="stylesheet"/>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap"
        rel="stylesheet"/>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset('css/styles.css')}}" rel="stylesheet"/>
</head>
<body>
<!-- Background Video-->
<video class="bg-video" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="mp4/cooking.mp4" type="video/mp4"/>
</video>
<!-- Masthead-->
<div class="masthead">
    <div class="masthead-content text-dark">
        <div class="container-fluid px-4 px-lg-0">
            <div class="top-images text-start">
                <img src="img/logo_uet.png" alt="Image Description 1" style="width: 14%; max-width: 600px; margin: 20px auto;">
                <img src="img/logo_ag.png" alt="Image Description 2" style="width: 17%; max-width: 600px; margin: 20px auto;">
            </div>
            <h1 class="fst-italic lh-1 mb-6">Discover How Cooking Alters Nutrients</h1>
            <p class="mb-6">Dive into the science behind your meals with our website, where we reveal the
                fascinating changes your food undergoes from raw to cooked, ensuring you maximize the nutritional value
                in every bite.</p>
            <form action="{{ route('food.search') }}" method="GET" id="searchForm">
                <!-- Search input -->
                <div class="row input-group-newsletter">
                    <div class="col">
                        <input type="text" name="q" class="form-control" id="foodSearch"
                               placeholder="Search your food..." aria-label="Search your food..." required/>
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary" id="submitButton">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Social Icons-->
<!-- For more icon options, visit https://fontawesome.com/icons?d=gallery&p=2&s=brands-->
<div class="social-icons">
    <div class="d-flex flex-row flex-lg-column justify-content-center align-items-center h-100 mt-3 mt-lg-0">
        <a class="btn btn-dark m-3" href="https://www.facebook.com/UET.FAT"><i class="fab fa-facebook-f"></i></a>
        <a class="btn btn-dark m-3" href="http://fat.uet.vnu.edu.vn/"><i class="fas fa-globe"></i></a>
        <a class="btn btn-dark m-3" href="https://www.tiktok.com/@fat_uet"><i class="fab fa-tiktok"></i></a>
    </div>
</div>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>

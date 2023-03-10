<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous">

        <!-- google font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link
            rel="preconnect"
            href="https://fonts.gstatic.com"
            crossorigin="crossorigin">
        <link
            href="https://fonts.googleapis.com/css2?family=Explora&family=Kaushan+Script&family=Poppins:wght@400;500&family=Roboto:wght@100;300;400;500&family=Satisfy&family=Unbounded:wght@900&display=swap"
            rel="stylesheet">
        <!-- close google font -->

        <!-- google font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link
            rel="preconnect"
            href="https://fonts.gstatic.com"
            crossorigin="crossorigin">
        <link
            href="https://fonts.googleapis.com/css2?family=Explora&family=Poppins:wght@400;500&family=Roboto:wght@100;300;400;500&family=Satisfy&family=Unbounded:wght@900&display=swap"
            rel="stylesheet">
        <!-- google font -->

        <!-- style css -->
        <link rel="stylesheet" href="assets/dist/css/login.css">
        <!-- close style css -->

        <title>Login</title>
    </head>

    <body>
        <div class="wrapper">
          <div class="wrapper-left">
                <div class="logo"></div>

                <!-- gambar -->
                <div
                    id="carouselExampleCaptions"
                    class="carousel slide"
                    data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button
                            type="button"
                            data-bs-target="#carouselExampleCaptions"
                            data-bs-slide-to="0"
                            class="active"
                            aria-current="true"
                            aria-label="Slide 1"></button>
                        <button
                            type="button"
                            data-bs-target="#carouselExampleCaptions"
                            data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button
                            type="button"
                            data-bs-target="#carouselExampleCaptions"
                            data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets/dist/img/img1-1.jpg" class="d-block w-10" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Love</h5>
                                <p>Loved you yesterday, love you still, always have, always will</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="assets/dist/img/img2.jpg" class="d-block w-10" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Live</h5>
                                <p>Life is what happens when you're busy making other plans.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="assets/dist/img/img3.jpg" class="d-block w-10" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>life</h5>
                                <p>The greatest glory in living lies not in never falling, but in rising every
                                    time we fall</p>
                            </div>
                        </div>
                    </div>
                    <button
                        class="carousel-control-prev"
                        type="button"
                        data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button
                        class="carousel-control-next"
                        type="button"
                        data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <!--cl gambar -->
            </div>
            <div class="wrapper-right">
                <div class="content">
                    <h1 class="welkom">
                        Welcome to
                    </h1>
                    <p class="paragraf">---</p>
                </div>

                <!-- form -->
                <div class="data">
                    <form class="input-data ">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Username</label>
                            <input
                                type="email"
                                class="form-control"
                                id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-warning w-100 mt-3">Login</button>
                    </form>
                </div>
                <!-- colse form -->
            </div>
        </div>

        <!-- script -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
        <!-- cl script -->
    </body>
</html>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/dist/css/style.css">

        {{-- font awesome --}}
        <link
            rel="stylesheet"
            href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
        {{-- cl font awesome --}}

        <!-- Bootstrap CSS -->
        <link
            href="{{ asset ('/') }}assets/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
            crossorigin="anonymous">
        <link
            href="{{ asset ('/') }}assets/plugins/fontawesome/css/all.min.css"
            rel="stylesheet">

        <title>Home | Alpha</title>
    </head>
    <body>
        {{-- atas --}}
        <div class="sidebar">
            <div class="sidebar-brand">
                {{-- <img src="" alt=""> --}}
                <h1>
                    <span class="lab la-accusoft"></span>logo</h1>
            </div>

            <div class="sidebar-menu">
                <ul>
                    <li>
                        <a href="#">
                            <span class="la la-ifloo"></span><span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="la la-users"></span><span>User</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="la la-clipboard-list"></span><span>project</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="las la-shipping-bag"></span><span>Orders</span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
        {{-- cl atas --}}

        {{-- inti --}}
        <div class="main-content">
            <header>
                <h1>
                    <label for="">
                        <span class="las la-bars"></span>
                    </label>
                     Dashboard
                </h1>

                <div class="search-wrapper">
                    <span class="las la--search"></span>
                    <input type="search" placeholder="Search here"/>
                </div>

                <div class="user-wrapper">
                    <img src="assets/dist/img/pp.jpg" width="30px" height="30px" alt="">
                </div>
                <div>
                    <h4>
                        Keqing</h4>
                    <small>admin</small>
                </div>
            </header>
            <main>
                <div class="cards">
                    <div class="card-single">
                        <div>
                            <h1>54</h1>
                            <span>costumers</span>
                        </div>
                    </div>
                </div>

                <div class="cards">
                    <div class="card-single">
                        <div>
                            <h1>54</h1>
                            <span>costumers</span>
                        </div>
                        <div>
                            <span class="las la-users"></span>
                        </div>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>50</h1>
                        <span>project</span>
                    </div>
                    <div>
                        <span class="las la-clipboard"></span>
                    </div>
                </div>
            </div>

            {{-- cl inti --}}

            <script
                src="assets/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
                crossorigin="anonymous"></script>

            <!-- Option 2: Separate Popper and Bootstrap JS -->
            <!-- <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
            integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
            crossorigin="anonymous"></script> <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
            integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
            crossorigin="anonymous"></script> -->

        </body>
    </html>
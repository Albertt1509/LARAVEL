<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1,maximum-scale">
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
        <input type="checkbox" id="nav-toggle">
        <div class="sidebar">
            <div class="sidebar-brand">
                <img src="assets/dist/img/" width="25%" alt="">
                <h1>
                    <span class="lab"></span><span>Electro</span></h1>
            </div>

            <div class="sidebar-menu">
                <ul>
                    <li>
                        <a href="/home" class="active">
                            <span class="la la-igloo"></span><span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="/user">
                            <span class="la la-users mt-4"></span><span>User</span>
                        </a>
                    </li>
                    <li>
                        <a href="/project">
                            <span class="la la-clipboard-list mt-4"></span><span>project</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="las la-shopping-bag mt-4"></span><span>Orders</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        {{-- cl atas --}}

        {{-- inti --}}
        <div class="main-content">
            <header>
                <h2>
                    <label for="nav-toggle">
                        <span class="las la-bars"></span>
                    </label>
                    Dashboard
                </h2>

                <div class="search-wrapper">
                    <span class="las la--search"></span>
                    <input type="search" placeholder="Search Here"/>
                </div>

                <div class="user-wrapper">
                    <div>
                        <a href="#" class="akun text-dark "><img src="assets/dist/img/pp.jpg" width="30px" height="30px" alt="">
                        </div>
                        <h5 class="p-1">Keqing</h5>
                    </a>
                </div>

            </header>

            <main>
                <div class="cards">
                    <div class="card-single">
                        <div>
                            <h2>70</h2>
                            <span>Product</span>
                        </div>
                        <div>
                            <span class="las la-clipboard"></span>
                        </div>
                    </div>

                    <div class="card-single">
                        <div>
                            <h2>123</h2>
                            <span>Order</span>
                        </div>
                        <div>
                            <span class="las la-shopping-bag"></span>
                        </div>
                    </div>

                    <div class="card-single">
                        <div>
                            <h2>$--</h2>
                            <span>Income</span>

                        </div>
                        <div>
                            <span class="lab la-google-wallet"></span>
                        </div>
                    </div>

                    {{-- jam --}}

                    <div id="MyClockDisplay" class="clock" onload="showTime()"></div>

                    {{-- close jam --}}

                </div>

            </main>
        </div>

        {{-- cl inti --}}

        {{-- scriptcjam --}}
        <script>
            function showTime() {
                var date = new Date();
                var h = date.getHours(); // 0 - 23
                var m = date.getMinutes(); // 0 - 59
                var s = date.getSeconds(); // 0 - 59
                var session = "";

                if (h == 0) {
                    h = 12;
                }

                if (h > 12) {
                    h = h - 12;
                    session = "";
                }

                h = (h < 10)
                    ? "0" + h
                    : h;
                m = (m < 10)
                    ? "0" + m
                    : m;
                s = (s < 10)
                    ? "0" + s
                    : s;

                var time = h + ":" + m + ":" + s + " " + session;
                document
                    .getElementById("MyClockDisplay")
                    .innerText = time;
                document
                    .getElementById("MyClockDisplay")
                    .textContent = time;

                setTimeout(showTime, 1000);

            }

            showTime();
        </script>
        {{-- close script jam --}}

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
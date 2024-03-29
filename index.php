<?php require 'config/dbconnect.php';
?>


<!DOCTYPE HTML>
<html>

<head>
    <title>High Schoolar's Hub</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />

</head>

<body class="landing is-preload">
    <div id="page-wrapper ">

        <!-- Header -->
        <header id="header" class="alt">
            <h1>
                <a href="index.php">High Schoolar's Hub</a>
            </h1>
            <!--Nav Bar--> 
          <?php include 'includes/navbar.php'; ?> 
            <!--End of Nav Bar--> 
        </header>


        <!-- Banner -->
        <section id="banner">
            <h2>High Scholar's Hub</h2>
            <p>Platforma e vetme në vend për nxënësit e shkollave të mesme</p>
            <ul class="actions special">
                <li>
                    <a href="kyqu.php" class="button primary">Kyqu</a>
                </li>
            </ul>
        </section>
    </div>
    <!-- Main -->
    <section id="main" class="container">

        <section class="box special">
            <header class="major">
                <h2>Të mësojmë së bashku
                    <br /> Të gjithë në një vend</h2>
                <p>Programi ynë do t'ju përgatisë për një të ardhme më të mirë dhe më të lehtë</p>

            </header>
            <span class="image featured">
                <!-- Page Wrap -->
                <div class="page-wrap">
                    ​
                    <div id="home-slider">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide swiper-slide-one">
                                    <div class="swiper-image" data-swiper-parallax-y="-20%">
                                        <div class="swiper-image-inner swiper-image-left swiper-image-one">
                                            <h1>
                                                <span class="emphasis">Të sfidohemi</span>.
                                            </h1>
                                        </div>
                                    </div>
                                    <div class="swiper-image" data-swiper-parallax-y="35%">
                                        <div class="swiper-image-inner swiper-image-right swiper-image-two">
                                            <p class="paragraph">
                                                Të sfidojmë vetën për të arritur gjithmonë një nivel më të madh se ai që presim është i dobishëm jo vetëm për shëndetin tonë
                                                mendor, por edhe për mirëqenien tonë personale. Ndërsa pushtojmë sfida që
                                                qëndrojnë në rrugën tonë si bllokime në rrugë, duke refuzuar të dorëzohemi,
                                                ne gjejmë besim në aftësitë tona. Besimi është një karakteristikë kaq e rëndësishme
                                                për të gjetur rrugën drejt suksesit.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-two">
                                    <div class="swiper-image" data-swiper-parallax-y="-20%">
                                        <div class="swiper-image-inner swiper-image-left swiper-image-three">
                                            <h1>
                                                <span class="emphasis">Të mësojmë</span>.
                                            </h1>
                                        </div>
                                    </div>
                                    <div class="swiper-image" data-swiper-parallax-y="35%">
                                        <div class="swiper-image-inner swiper-image-right swiper-image-four">
                                            <p class="paragraph">
                                                Motivimi është sfida më e rëndësishme drejt suksesit në jetën akademike, dhe mund të bëhet tejet sfiduese veçanërisht kur
                                                keni shumë detyra, kurse, provime ose ese për të dorëzuar. Shpesh puna juaj
                                                mund të bëhet sfiduese, por këtu tek ne do të gjeni mbështjetjen e duhur,
                                                këshilla të nevojshme për t'ju motivuar për të studiuar, si dhe trajnime
                                                online për secilën fushë të studimit.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-three">
                                    <div class="swiper-image" data-swiper-parallax-y="-20%">
                                        <div class="swiper-image-inner swiper-image-left swiper-image-five">
                                            <h1>
                                                <span class="emphasis">Të luajmë</span>.
                                            </h1>
                                        </div>
                                    </div>
                                    <div class="swiper-image" data-swiper-parallax-y="35%">
                                        <div class="swiper-image-inner swiper-image-right swiper-image-six">
                                            <p class="paragraph">
                                                Lojërat edukative janë një mjet i shkëlqyeshëm për ndërtimin e aftësive në matematikë, gjuhë, shkencë, studime shoqërore
                                                dhe shumë më tepër. Këto lojëra janë argëtuese, të mësojnë aftësi të rëndësishme
                                                në secilën fushë studimi të veçantë dhe ato janë falas. Ju jeni në vendin
                                                e duhur! Le të studiojmë dhe të argëtohemi së bashku.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                ​
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    ​
                </div>
            </span>
        </section>

        <section class="box special features">
            <div class="features-row">
                <section>
                    <span class="icon solid major fa-pen accent2"></span>
                    <h3>Të mësojmë</h3>
                    <p>Motivimi është sfida më e rëndësishme drejt suksesit në jetën akademike, dhe mund të bëhet tejet sfiduese
                        veçanërisht kur keni shumë detyra, kurse, provime ose ese për të dorëzuar. Shpesh puna juaj mund
                        të bëhet sfiduese, por këtu tek ne do të gjeni mbështjetjen e duhur, këshilla të nevojshme për t'ju
                        motivuar për të studiuar, si dhe trajnime online për secilën fushë të studimit.</p>
                </section>
                <section>
                    <span class="icon solid major fa-glasses accents"></span>
                    <h3>Të sfidohemi </h3>
                    <p> Të sfidojmë vetën për të arritur gjithmonë një nivel më të madh se ai që presim është i dobishëm jo vetëm
                        për shëndetin tonë mendor, por edhe për mirëqenien tonë personale. Ndërsa pushtojmë sfida që qëndrojnë
                        në rrugën tonë si bllokime në rrugë, duke refuzuar të dorëzohemi, ne gjejmë besim në aftësitë tona.
                        Besimi është një karakteristikë kaq e rëndësishme për të gjetur rrugën drejt suksesit.</p>
                </section>
            </div>
            <div class="features-row">
                <section>
                    <span class="icon solid major fa-gamepad accent4"></span>

                    <h3>Të luajmë</h3>
                    <p>Lojërat edukative janë një mjet i shkëlqyeshëm për ndërtimin e aftësive në matematikë, gjuhë, shkencë,
                        studime shoqërore dhe shumë më tepër. Këto lojëra janë argëtuese, të mësojnë aftësi të rëndësishme
                        në secilën fushë studimi të veçantë dhe ato janë falas. Ju jeni në vendin e duhur! Le të studiojmë
                        dhe të argëtohemi së bashku.</p>
                </section>
                <section>
                    <span class="icon solid major fa-male accent5"></span>
                    <h3>Profili im</h3>
                    <p>Personalizoni profilin tuaj në përputhje me nevojat dhe interesin tuaj! Bëni miq të rinj, ndihmoni të
                        tjerët, kontribuoni në dhoma diskutimi ose krijoni faqen tuaj, merrni ndihmë nga të tjerët, zgjidhni
                        aktivitetet dhe çfarë dëshironi të njoftoheni çdo ditë në profilin tuaj, dhe shumë më tepër.</p>
                </section>
            </div>
        </section>

        <div class="row">
            <div class="col-6 col-12-narrower">

                <section class="box special">
                    <span class="image featured">
                        <img src="images/pic02.jpg" alt="" />
                    </span>
                    <h3>Mësoni programim online</h3>
                    <p>Mësoni gjithçka rreth programimit falas. Gjeni gjuhët më të avancuara të programimit dhe bëhuni pjesë e
                        një tregu sfidues.
                    </p>
                    <ul class="actions special">
                        <li>
                            <a href="https://www.codecademy.com/" class="button alt">Mëso më shumë</a>
                        </li>
                    </ul>
                </section>

            </div>
            <div class="col-6 col-12-narrower">

                <section class="box special">
                    <span class="image featured">
                        <img src="images/pic03.jpg" alt="" />
                    </span>
                    <h3>Bursa për studime Bachelor</h3>
                    <p>Zbulo dhe përzgjedh universitetet në të cilat dëshiron të studiosh. Apliko përmes nesh për të fituar
                        bursë në universitetet tona partnere.</p>
                    <ul class="actions special">
                        <li>
                            <a href="http://www.mladiinfo.eu/category/scholarships/" class="button alt">Mëso më shumë</a>
                        </li>
                    </ul>
                </section>

            </div>
        </div>

    </section>

    <!-- Footer -->
    <footer id="footer">
        <ul class="icons">
            <li>
                <a href="#" class="icon brands fa-twitter">
                    <span class="label">Twitter</span>
                </a>
            </li>
            <li>
                <a href="#" class="icon brands fa-facebook-f">
                    <span class="label">Facebook</span>
                </a>
            </li>
            <li>
                <a href="#" class="icon brands fa-instagram">
                    <span class="label">Instagram</span>
                </a>
            </li>
            <li>
                <a href="#" class="icon brands fa-github">
                    <span class="label">Github</span>
                </a>
            </li>
            <li>
                <a href="#" class="icon brands fa-dribbble">
                    <span class="label">Dribbble</span>
                </a>
            </li>
            <li>
                <a href="#" class="icon brands fa-google-plus">
                    <span class="label">Google+</span>
                </a>
            </li>
        </ul>

    </footer>

    </div>
    <!-- Scripts -->
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/jquery.dropotron.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/kyqu.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/regjistrohu.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/js/swiper.jquery.min.js"></script>
    <script src="assets/js/slider.js"></script>
</body>

</html>
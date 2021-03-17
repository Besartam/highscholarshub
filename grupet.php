<?php require 'config/dbconnect.php';
$query = $pdo->query =('SELECT * from grupet LIMIT 3'); 
$grupet = $query->fetchAll();
?>




<!DOCTYPE HTML>

<html>

<head>
    <title>Grupet</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>

<body class="is-preload">
    <div id="page-wrapper">

        <!-- Header -->
        <header id="header">
            <header id="header" class="alt">
                <h1>
                    <a href="grupet.php">Grupet</a>
                </h1>
               <!--Nav Bar--> 
          <?php include 'includes/navbar.php'; ?> 
            <!--End of Nav Bar--> 
            </header>
        </header>
        <!-- Main -->
        <section id="main" class="container">
            <header>
                <h2>Grupet</h2>
                <p>Mësoni dhe Sfidohuni</p>
            </header>
            <div class="row">
                <div class="col-12">
                    <header>
                        <h3>Udhërrëfyes</h3>
                        <p>Më poshtë janë dhënë disa kuize nga lëndë të ndryshme</p>
                    </header>

                </div>
            </div>

            <div class="row">
                <div class="col-12">

                    <!-- Image -->
                    <section class="box">
                        <div class="box alt">
                            <div class="row gtr-50 gtr-uniform">
                                <?php foreach($grupet as $grupet): ?>

                                <div class="col-4 grup" id="gjsh">
                                    <span class="image fit">
                                        <img src="images/GjeSh.png" <?php echo $grup['image'];?> alt="" />
                                    </span>
                                    <a href="gjuheSh.php" class="button small fit">Gjuhë Shqipe</a>
                                </div>

                                <tr>
                                    <td><?php echo $users['name']; ?></td>
                                    <td><?php echo $users['email']; ?></td>
                                    <td><a href="single_user.php?id=<?php echo $user['id']; ?>" >Show</a></td>
                                    <td><a href="edit_user.php?id=<?php echo $user['id']; ?>">Edit</a></td>
                                    <td><a href="delete.php?id=<?php echo $user['id']; ?>">Delete</a></td> 
                                 </tr>
                                <div class="col-4 grup" id="gja">
                                    <span class="image fit">
                                        <img src="images/anglisht.png" alt="" />
                                    </span>
                                    <a href="gjuheAng.math" class="button small fit">Gjuhë Angleze</a>
                                </div>
                                <div class="col-4 grup" id="math">
                                    <span class="image fit">
                                        <img src="images/math.png" alt="" />
                                    </span>
                                    <a href="math.php" class="button small fit">Matematikë</a>
                                </div>
                                <div class="col-4" id="fiz">
                                    <span class="image fit">
                                        <img src="images/fizik.png" alt="" />
                                    </span>
                                    <a href="fizik.html" class="button small fit">Fizik</a>
                                </div>
                                <div class="col-4">
                                    <span class="image fit">
                                        <img src="images/kimi.png" alt="" />
                                    </span>
                                    <a href="kimi.html" class="button small fit">Kimi</a>
                                </div>
                                <div class="col-4">
                                    <span class="image fit">
                                        <img src="images/bio.png" alt="" />
                                    </span>
                                    <a href="bio.html" class="button small fit">Biologji</a>
                                </div>
                                <div class="col-4">
                                    <span class="image fit">
                                        <img src="images/tik.png" alt="" />
                                    </span>
                                    <a href="tik.html" class="button small fit">TIK</a>
                                </div>
                                <div class="col-4">
                                    <span class="image fit">
                                        <img src="images/histori.png" alt="" />
                                    </span>
                                    <a href="histori.html" class="button small fit">Histori</a>
                                </div>
                                <div class="col-4">
                                    <span class="image fit">
                                        <img src="images/Gjeo.png" alt="" />
                                    </span>
                                    <a href="gjeo.html" class="button small fit">Gjeografi</a>
                                </div>
                            </div>
                        </div>


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
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.dropotron.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>

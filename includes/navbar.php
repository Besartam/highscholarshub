<?php
$activePage = basename($_SERVER['PHP_SELF']);
echo $activePage;
?>


<header id="header" class="alt">
            <h1>
                <a href="index.php">High Schoolar's Hub</a>
            </h1>
            <nav id="nav">
                <ul>
                    <li calss="<?= ($activePage == 'index.php') ? 'active': '';?> <a="href="index.php">HOME</a> 
                    </li>
                    <li calss="<?= ($activePage == 'index.php') ? 'active': '';?> <a="href="rrethnesh.php">Rreth Nesh</a>
                    </li>
                    <li calss="<?= ($activePage == 'index.php') ? 'active': '';?> <a="href="rregullat.php">Rregullat</a>
                    </li > 
                    <li calss="<?= ($activePage == 'index.php') ? 'active': '';?> <a="href="grupet.php">Grupet</a>
                    </li>
                    <li calss="<?= ($activePage == 'index.php') ? 'active': '';?> <a="href="kontakt.php">Kontakt</a>
                    </li>
                </ul>
            </nav>
        </header>
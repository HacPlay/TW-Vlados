<?php session_start(); ?>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enciclopedia Ghetelor</title>
    <link rel="stylesheet" href="css/background.css">
</head>
<body>
    <nav>
        <div class="menu-container">
            <div class="menu-logo">
                <a href="index.php">
                    <img src="https://avatars.mds.yandex.net/i?id=2294261ab123758c4348dfc628096761dbe3fd9a-9223201-images-thumbs&n=13" alt="Logo">
                </a>
            </div>
            <ul class="menu-list">
                <li><a href="index.php">Acasă</a></li>
                <li><a href="nike.php">Nike</a></li>
                <li><a href="adidas.php">Adidas</a></li>
                <li><a href="puma.php">Puma</a></li>
                <li><a href="reebok.php">Reebok</a></li>
                <li><a href="new_balance.php">New Balance</a></li>
            </ul>

            <?php if (isset($_SESSION["username"])): ?>
                <span style="color:white; margin-left: 10px;">
                    Salut, <?= htmlspecialchars($_SESSION["username"]) ?>!
                </span>
                <a href="logout.php" class="btn-inregistrare">Delogare</a>
            <?php else: ?>
                <a href="login-page.php" class="btn-inregistrare">Autentificare</a>
                <a href="register-page.php" class="btn-inregistrare">Înregistrează-te</a>
            <?php endif; ?>

            <button id="theme-toggle">🌙 Schimbă Tema</button>
        </div>
    </nav>

    <div class="content-container">
        <div class="company-text">
            <h1>Enciclopedia Ghetelor</h1>
            <p>Bine ai venit la Enciclopedia Ghetelor! Aici vei găsi informații despre diferite tipuri de ghete.</p>
            <p>Bine ai venit la Enciclopedia Ghetelor! Aici vei găsi informații despre diferite tipuri de ghete, fiecare creată pentru a satisface nevoile specifice ale sportivilor și pasionaților de modă. Indiferent că ești în căutarea unei perechi de ghete pentru alergare, fotbal, baschet sau pur și simplu pentru un stil de viață activ, această enciclopedie îți va oferi tot ce trebuie să știi despre fiecare brand și tip de încălțăminte.</p>
            <p>În paginile acestei enciclopedii vei descoperi o diversitate de modele de ghete, de la cele clasice și elegante la cele special concepute pentru performanță maximă. Fiecare pereche de ghete are un design unic, inspirat din ultimele tendințe ale industriei și susținut de tehnologii inovative care îți vor transforma experiența sportivă sau de zi cu zi.</p>
            <p>Explorează, învață și alege-ți perechea ideală de ghete dintr-o gamă variată de branduri renumite!</p>
        </div>
        <div class="image-slider">
            <div class="image-slider-container">
                <img src="https://vnews24.it/wp-content/uploads/2018/01/nike_banner.png" alt="Nike">
                <img src="https://sun9-39.userapi.com/impf/1nID4w6hJL3NLAYBDtvhZpOaQNy_yLSXLS5j1w/IFGEZ8WQr0g.jpg?size=800x400&quality=96&sign=c4b1e0e809b91cf1444a1cc5e33da486&c_uniq_tag=dfY-j6fSXJn_4btTIXEAxw97ooERo0LFFff-uij-s_o&type=album" alt="Adidas">
                <img src="https://static.vecteezy.com/system/resources/thumbnails/020/336/033/small_2x/puma-logo-puma-icon-free-free-vector.jpg" alt="Puma">
                <img src="https://cdn.grupoelcorteingles.es/statics/manager/contents/images/uploads/2024/10/SkgwvycC11e.jpeg?impolicy=Resize&width=800" alt="Reebok">
                <img src="https://images.footlocker.com/content/dam/final/FootLockerInc/site/evergreen/brand-6up-new-balance.jpg" alt="New Balance">
            </div>
        </div>        
    </div>
    <script src="js\java.js"></script>
</body>
</html>

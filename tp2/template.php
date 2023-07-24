<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="images/fav.ico">

    <!-- OG -->
	<meta property="og:title" content="Labo UAC :" />
	<meta property="og:description" content="Laboratoire informatique de l'UAC" />
	<meta property="og:image" content="https://www.tp1.polytech.uaclab.net/img.jpg">
	<meta property="og:locale" content="fr_FR" />
	<meta property="og:url" content="https://www.tp1.polytech.uaclab.net" />
	<meta property="og:type" content="article">
	<meta property="og:fb:app_id">
	<meta name="format-detection" content="telephone=no">
</head>
<body>
    <header>
        <div id="baniere_img"> High Tech content web</div>
        <nav>
            <ul id="main_menu">
                <li  class="<?= ($page=="index")?"active":"" ?>"><img src="images/home.png" alt=""> <a href="index.php">Accueil</a></li>
                <li class="<?= ($page=="activites")?"active":"" ?>"><img src="images/news.png" alt=""> <a href="activites.php">Activités</a></li>
                <li><img src="images/community.png" alt=""> <a href="communaute.php">Communauté</a></li>
                <li><img src="images/contact.png" alt=""> <a href="contact.php">Contacts</a></li>
                <li><img src="images/bootstrap.png" alt=""><a href="bootstrap.php">Bootstrap</a></li>
            </ul>
        </nav>
    </header>
    <?= $page_content ?>
    <footer>
        <div id="menu">
            <div>
                <h2>Nous contacter sur</h2>
                <ul>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">LinkedIn</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Immo</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">Vimeo</a></li>
                </ul>
            </div>
            <div>
                <h2>Langages favoris</h2>
                <ul>
                    <li><a href="#">C sharp .net (C#)</a></li>
                    <li><a href="#">Java</a></li>
                    <li><a href="#">Python</a></li>
                    <li><a href="#">C</a></li>
                    <li><a href="#">C++</a></li>
                    <li><a href="#">javaScript</a></li>
                </ul>
            </div>
            <div>
                <h2>Lorem, ipsum.</h2>
                <ul>
                    <li><a href="#">Lorem, ipsum</a></li>
                    <li><a href="#">Lorem, ipsum</a></li>
                    <li><a href="#">Lorem, ipsum</a></li>
                    <li><a href="#">Lorem</a></li>
                    <li><a href="#">Lorem</a></li>
                    <li><a href="#">Lorem, ipsum</a></li>
                </ul>
            </div>
        </div>
        <p style="text-align: center;">Website template created by IrAlfred &copy; 2023</p>
    </footer>
    <script>
        document.oncontextmenu = function(){return false;}
    </script>
</body>
</html>
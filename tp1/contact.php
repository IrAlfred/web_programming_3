<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos contacts</title>
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
        <?php include("menu.php"); ?>
    </header>
    <div class="jumbotron2">
        Laissez-nous quelques informations...
    </div>
    <div id="div_form">
        <form>
            <div class="input_group">
                <div><label for="nom">Votre nom :</label></div>
                <div><input type="text" class="form-ctrl" placeholder="Entrer votre nom ici" maxlength="10" name="" id="nom"></div>
            </div>
            <div class="input_group">
                <div><label for="postnom">Postnom :</label></div>
                <div><input class="form-ctrl" type="text" name="" id="postnom" placeholder="Entrer votre postnom"></div>
            </div>
            <div class="input_group">
                <div><label>Tapez votre mot de passe:</label></div>
                <div><input type="password" name="" class="form-ctrl" placeholder="Choisir mot de passe"></div>
            </div>
            <div class="input_group">
                <div><label>Entrer à nouveau votre mot de passe:</label></div>
                <div><input type="password" name="" class="form-ctrl" placeholder="Choisir mot de passe"></div>
            </div>
            <div  class="input_group">
                <div><label>Genre :</label></div>
                <div>
                    <select name="" id="" class="form-ctrl">
                        <option value="m">Masculin</option>
                        <option value="f">Féminin</option>
                    </select>
                </div>
            </div>
            <div class="input_group">
                <div><label>Votre date de naissance :</label></div>
                <div><input class="form-ctrl" type="date" name=""></div>
            </div>
            <div  class="input_group">
                <div><label>Votre CV au format PDF :</label></div>
                <div><input type="file" name=""></div>
            </div>
            <div class="input_group">
                <input type="reset" name="" class="btn" value="Reininitaliser">
                <input type="submit" name="" class="btn" value="Envoyer">
            </div>
        </form>
    </div>

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
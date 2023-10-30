<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Marvel</title>
    <link rel="stylesheet" href="../../public/CSS/style.css">

</head>

<body>
    <header>
    <nav>
            <h2>ML</h2>
            <button id="navbarToggle">
                <img src="../../public/Images/Menu.svg" alt="Menu de navigation">
            </button>
        </nav>
        <div class="navbar-menu" id="navbarMenu">
            <div class="close-button" id="closeButton"><img class="closedButton" src="../../public/Images/Cross.svg" alt="Croix pour fermer la navigation"></div>
            <ul class="menu">
                <li><a href="#">Accueil</a></li>
                <li><a href="#">À propos</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">Compétences</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <!-- <nav>
            <div class="logo">
                <h1>MARVEL</h1>
                <p class="blog">BLOG</p>
            </div>
            <button id="navbarToggle">
                <img src="../../public/Images/Menu.svg" alt="Icône menu">
            </button> -->
           
            <!-- <div class="navbarMenu" id="navBarMenu">
                    <div id="closeButton">
                        <img src="../../public/Images/Cross.svg" alt="Croix">
                    </div>
                    <ul>
                    <li><a href="#">ACCUEIL</a></li>
                    <select name="categorie" id="category">
                        <option value="marvel">Marvel Comics</option>
                        <option value="dc">DC Comics</option>
                        <option value="image">Image Comics</option>
                        <option value="idw">IDW Publishing</option>
                        <option value="valiant">Valiant Comics</option>
                        <option value="boom">Boom! Studios</option>
                    </select>
                    <li><a href="#">Commentaires</a></li>
                    <li><a href="#">Compte</a></li>
                </ul>
                </div> -->
            <!-- <div class="menu">
                <ul>
                    <li><a href="#">ACCUEIL</a></li>
                    <select name="categorie" id="categorie">
                        <option value="marvel">Marvel Comics</option>
                        <option value="dc">DC Comics</option>
                        <option value="image">Image Comics</option>
                        <option value="idw">IDW Publishing</option>
                        <option value="valiant">Valiant Comics</option>
                        <option value="boom">Boom! Studios</option>
                    </select>
                    <li><a href="#">Commentaires</a></li>
                    <li><a href="#"></a></li>
                </ul>
            </div>
        </nav>
        <div class="navbar-menu" id="navbarMenu">
                <div class="close-button" id="closeButton"><img class="closedButton" src="../../public/Images/Cross.svg" alt="Croix pour fermer la navigation"></div>
                <ul class="menu">
                    <li><a href="#">Accueil</a></li>
                    <li><a href="#">À propos</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">Compétences</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div> -->
    </header>

    <?= $content ?>

    <footer>

    </footer>

    <script src="../../public/JS/script.js"></script>
</body>

</html>
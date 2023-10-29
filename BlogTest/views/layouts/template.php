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
            <div class="logo">
                <h1>MARVEL</h1>
                <p>BLOG</p>
            </div>
            <div class="select">
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
    </header>

    <?= $content ?>

    <footer>

    </footer>

    <script src="../../public/JS/script.js"></script>
</body>

</html>
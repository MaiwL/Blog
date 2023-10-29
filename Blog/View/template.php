<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comics Blog</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../View/CSS/style.css">
</head>
<body>

    <!-- HEADER -->

    <header>
        <nav>
            <div class="nameBlog">
            <p class="paraComics">Comics</p>
            <p class="paraBlog">BLOG</p>
            </div>
           
            
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
        </nav>
    </header>

    <!-- CONTENUE -->

    <?= $content ?>

    <!-- FOOTER -->


    <script src="../View/JS/script.js"></script>
</body>
</html>
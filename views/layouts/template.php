<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Marvel</title>
    <link rel="stylesheet" href="../../public/CSS/style.css">
    <!-- BOXICONS CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    
    <header>
        <nav class="nav">
            <ul class="nav-content">
                <li class="nav-list">
                    <a href="#" class="link-item active">
                        <i class='bx bx-home-alt link-icon'></i>
                        <span class="link-text">Acceuil</span>
                    </a>
                </li>
                <li class="nav-list">
                    <a href="#" class="link-item">
                        <i class='bx bx-conversation link-icon'></i>
                        <span class="link-text">Articles</span>
                    </a>
                </li>
                <li class="nav-list">
                    <a href="#" class="link-item">
                        <i class='bx bx-message-rounded-dots link-icon' ></i>
                        <span class="link-text">Commentaires</span>
                    </a>
                </li>
                <li class="nav-list">
                    <a href="#" class="link-item">
                        <i class='bx bx-user-circle link-icon' ></i>
                        <span class="link-text">Comptes</span>
                    </a>
                </li>
                <li class="nav-list">
                    <a href="#" class="link-item">
                        <i class='bx bx-phone link-icon'></i>
                        <span class="link-text">Contact</span>
                    </a>
                </li>
            </ul>
            <span class="indicator"></span>
        </nav>
    </header>
    <h1>COMICS BLOG</h1>

    <?= $content ?>

    <footer>

    </footer>

    <script src="../../public/JS/script.js"></script>
</body>

</html>
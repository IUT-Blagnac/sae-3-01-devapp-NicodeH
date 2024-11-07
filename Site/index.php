<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil</title>
    <!-- Lien vers le fichier CSS de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Lien vers le fichier CSS du thème Bootswatch -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/cosmo/bootstrap.min.css">
</head>

<body class="d-flex flex-column min-vh-100">
    <!-- En-tête -->
    <header class="bg-primary text-white text-center py-1" style="display: flex; justify-content: space-between;">
        <div class="container">
            <h1>Mon site E-Commerce</h1>
        </div>
    </header>
    <!-- Conteneur principal -->
    <div class="container-fluid flex-grow-1">
        <div class="row">

            <!-- Menu vertical sur la gauche -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
                <div class="position-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php"> Accueil </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="prix.php"> Consulter les produits par prix </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="categorie.php"> Consulter les produits par catégorie </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="AjoutCategorie.php"> Ajouter une catégorie </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?action=logout">Se déconnecter</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?action=logout">Détruire Cookie</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <!-- Pied de page -->
    <footer class="bg-dark text-white text-center py-1 mt-auto">
        <div class="container">
            <p class="mb-0">&copy; 2024 MonSite. Tous droits réservés.</p>
        </div>
    </footer>

    <!-- Scripts JavaScript de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
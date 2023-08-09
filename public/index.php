<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lilly Relax Massage</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-success bg-opacity-25">


<header id="section1" class="text-center">
    <div class="container bg-success bg-opacity-25 p-0">

        <div class="row align-items-center">
            <div class="col-4">
                <img src="img/logo.PNG" alt="Logo" class="img-fluid">
            </div>
            <div class="col-8">
                <h1 class="text-start fs-1">Lilly`s</h1>
                <h2 class="text-center fs-3">Relax Massage</h2>
            </div>
        </div>

        <div class="row mt-4">
            <h3 class="lead fs-2">Muskelentspannende und schmerzlindernde Massagen</h3>

        </div>
</header>


<nav class="navbar navbar-expand-lg navbar-light bg-light border-top border-bottom p-3">
    <div class="container">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#pricelist">Leistungen und Preise</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#about">Über mich</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#galery">Galerie</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contact">Kontakt</a>
            </li>
        </ul>

    </div>
</nav>


<div class="container bg-light">
    <div class="row">
        <div class="col-auto">
            <section id="pricelist" class="row py-5">
                <div class="container">
                    <h4 class="mb-5">Leistungen und Preise</h4>

                </div>
            </section>

            <section id="about" class="row py-5 bg-light">
                <div class="container">
                    <h4>Über mich</h4>
                    <p>
                        Lorem Ipsum
                    </p>
                </div>
            </section>

            <section id="galery" class="row py-5">
                <div class="container">
                    <h4>Galerie</h4>
                </div>
            </section>

            <section id="contact" class="row py-5">
                <div class="container">
                    <h4>Kontakt</h4>
                    <p>Öffnungszeiten:</p>
                </div>
            </section>
        </div>

    </div>
</div>


<footer class="py-4 text-center bg-success bg-opacity-50">
    <div class="container">
        <p>&copy; 2023 <?= (date( 'Y' ) !== '2023' ? ' - ' . date( 'Y' ) : '') ?> Lilly Relax Massage</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
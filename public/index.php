<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lilly Relax Massage</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="background-clr">


<header class="text-center mb-3">
    <div class="container background-clr-logo p-0">

        <div class="row align-items-center">
            <div class="col-5 px-4">
                <img src="img/logo.png" alt="Logo" class="img-fluid w-100">
            </div>
            <div class="col-7">
                <h1 class="text-start font-snell ps-4 fs-1 mt-3 fw-bolder">Lilly´s</h1>
                <h2 class="text-center fs-2 fw-light">Relax Massage</h2>

                <h3 class="mt-4 text-start fs-6 fw-lighter">Muskelentspannende und schmerzlindernde Massagen</h3>
            </div>
        </div>
</header>


<div class="container p-0">
    <nav class="navbar navbar-expand-lg background-clr-nav border-top border-bottom p-3">
        <div class="container">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link" href="#about">Über mich</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#pricelist">Leistungen und Preise</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#booking">Terminbuchung</a>
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
</div>


<div class="container">
    <div class="row">
        <div class="col">

            <section id="about" class="row mt-3 py-3 background-clr-odd">
                <div class="container">
                    <h4 class="mb-3">Über mich</h4>

                    <div class="row">
                        <div class="col-4 col-sm-12"></div>
                        <div class="col-4 col-sm-4">
                            <img src="img/about.png" class="rounded img-fluid rounded-circle" alt="Bild über mich">
                        </div>

                        <div class="col-12 col-sm-8">
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est
                                Lorem
                                ipsum dolor sit amet.</p>
                        </div>

                    </div>
                </div>
            </section>

            <section id="pricelist" class="row mt-2 py-3 background-clr-even">
                <div class="container">
                    <h4 class="mb-3">Leistungen und Preise</h4>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est
                        Lorem
                        ipsum dolor sit amet.</p>
                </div>
            </section>

            <section id="booking" class="row mt-2 py-3 background-clr-odd">
                <div class="container">
                    <h4 class="mb-3">Terminbuchung</h4>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est
                        Lorem
                        ipsum dolor sit amet.</p>
                </div>
            </section>

            <section id="galery" class="row mt-2 py-3 background-clr-even">
                <div class="container">
                    <h4 class="mb-3">Galerie</h4>

                    <div class="row g-3">
                        <div class="col-4 image-zoom">
                            <img src="img/galery/welcome.jpeg" class="rounded img-fluid" alt="Bild mit einem thailändischen 'Willkommen'">
                        </div>
                        <div class="col-4 image-zoom">
                            <img src="img/galery/massage_table.jpeg" class="rounded img-fluid" alt="Bild mit einem thailändischen 'Willkommen'">
                        </div>
                        <div class="col-4 image-zoom">
                            <img src="img/galery/stones.jpeg" class="rounded img-fluid" alt="Bild mit einem thailändischen 'Willkommen'">
                        </div>
                    </div>

                </div>
            </section>

            <section id="contact" class="row mt-2 py-3 background-clr-odd">
                <div class="container">
                    <h4 class="mb-3">Kontakt</h4>
                    <p>Öffnungszeiten:</p>
                </div>
            </section>
        </div>

    </div>
</div>


<footer class="text-center">
    <div class="container background-clr-logo mt-3 p-2">
        <p>&copy; 2023 <?= (date( 'Y' ) !== '2023' ? ' - ' . date( 'Y' ) : '') ?> Lilly Relax Massage</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
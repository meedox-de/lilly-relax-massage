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


<header class="text-center mb-4">
    <div class="container background-clr-logo rounded-bottom-3">

        <div class="row align-items-center">

            <div class="col-5 col-md-4 px-4">
                <a href="/">
                    <img src="img/logo.png" alt="Logo" class="img-fluid w-100">
                </a>
            </div>

            <div class="col-7 col-md-5">

                <h1 class="text-start font-snell ps-4 fs-1 mt-3 fw-bolder header-font">Lilly´s</h1>
                <h2 class="text-center fs-2 fw-light">Relax Massage</h2>

                <h3 class="mt-4 text-start fs-6 fw-lighter">Muskelentspannende und schmerzlindernde Massagen</h3>
            </div>

            <div class="col-0 col-md-3"></div>
        </div>
    </div>
</header>


<div class="container p-0">
    <nav class="navbar navbar-expand-lg background-clr-nav border-top border-bottom p-3">
        <div class="container">
            <ul class="navbar-nav">

                <li class="nav-item me-3">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link" href="/#about">Über mich</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link" href="/#pricelist">Leistungen & Preise</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link" href="/#booking">Terminbuchung</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link" href="/#contact">Kontakt & Öffnungszeiten</a>
                </li>
            </ul>

        </div>
    </nav>
</div>


<div class="container">
    <div class="row">
        <div class="col">

            <section id="imprint" class="row mt-4 py-3 background-clr-odd rounded-3">
                <div class="container">
                    <h4 class="mb-3 text-center">Impressum</h4>

                    <h5>Angaben gemäß § 5 TMG:</h5>
                    <p>Lilly Relax Massagen</p>
                    <p>Weckenweg 27</p>
                    <p>85055 Ingolstadt</p>

                    <h5>Kontakt:</h5>
                    <p>Telefon: (+49) 174 - 387 02 02</p>
                    <p>E-Mail: info@lilly-relax-massagen.de</p>

                    <h5>Vertreten durch:</h5>
                    <p>Ralf Paluschik</p>

                    <h5>Umsatzsteuer-ID:</h5>
                    <p>Umsatzsteuer-Identifikationsnummer gemäß §27 a Umsatzsteuergesetz:</p>
                    <p>/</p>

                    <h5>Verantwortlich für den Inhalt nach § 55 Abs. 2 RStV:</h5>
                    <p>Ihr Name</p>
                    <p>Ihre Straße 123</p>
                    <p>PLZ Ort</p>
                </div>
            </section>

        </div>

    </div>
</div>


<footer class="text-center">
    <div class="container background-clr-logo mt-4 pt-2 rounded-top-3">
        <div class="row mb-4">


            <div class="col text-end m-0 p-0">
                <a class="nav-link" href="imprint.php">Impressum</a>
            </div>
            <div class="col-1 m-0 p-0">
                <p class="m-0 p-0">|</p>
            </div>
            <div class="col text-start m-0 p-0">
                <a class="nav-link" href="data_protection.php">Datenschutzerklärung</a>
            </div>
        </div>


        <div class="row">
            <p>&copy; 2023 <?= (date( 'Y' ) !== '2023' ? ' - ' . date( 'Y' ) : '') ?> Lilly Relax Massage</p>
        </div>

    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
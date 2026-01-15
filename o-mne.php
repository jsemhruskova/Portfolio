<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O mně - Lucie Hrušková</title>
    <meta name="description" content="Více informací o Lucii Hruškové - studentce multimédií, fotografce a webové vývojářce.">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Vlastní CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="custom-cursor"></div>

    <!-- Navigační menu -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">domů</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="o-mne.php">o mně</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kontakt.php">kontakt</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hlavní obsah -->
    <main class="about-page py-5">
        <div class="container">
            <!-- Sekce s textem a carouselem -->
            <div class="row mb-5 align-items-center">
                <!-- Levá strana - Text -->
                <div class="col-12 col-lg-6 mb-4 mb-lg-0">
                    <div class="row mb-5">
                <div class="col-12 text-center">
                    
                </div>
            </div>
                    <h1 class="page-title">Čas se něco o mně dozvědět!✨</h1>
                    <p class="intro-text">
                        Jsem <strong>studentka</strong>, která dokončuje studium na střední škole, kde studuji <strong>multimediální komunikace.</strong> <br>
                        
                        <br>
                        Celý svůj život bydlím v <strong>Praze</strong>.
                        Ráda se věnuji focení, ať už ve volném čase, tak i profesionálně s modely. Moje nadšenost pro focení nastala už když jsem byla mladší, od té doby se ho stále držím. <br>
                        <br>
                        Ráda se také podílím na <strong>grafice</strong> pro začínající firmy a <strong></strong>různé akce a festivaly. (<a href="https://www.cakovice.cz/Zamek-Fest-2025-1.html" target="_blank" class="links">ZámekFest2025</a>, <a href="https://autodoprava-malecek.cz" target="_blank" class="links">autodoprava-malecek.cz</a>)
                    </p>
                </div>

            <!-- Pravá strana - Překrývající se fotky -->
                <div class="col-12 col-lg-6">
                    <div class="stacked-images-container">
                        <img src="img/intro1.jpg" alt="Moje práce 1" class="stacked-image active" loading="lazy">
                        <img src="img/intro2.jpg" alt="Moje práce 2" class="stacked-image" loading="lazy">
                        <img src="img/intro3.jpg" alt="Moje práce 3" class="stacked-image" loading="lazy">
                    </div>
                </div>

            </div>

            <!-- Accordion rozbalovací sekce -->
            <div class="row">
                <div class="col-12 col-lg-10 mx-auto">
                    <div class="accordion" id="aboutAccordion">

                        <!-- Sekce 1 - Fotografie -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                    Fotografie
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#aboutAccordion">
                                <div class="accordion-body">
                                    <p>
                                        Ráda se věnuji focení, ať už ve volném čase, tak i profesionálně. 
                                        Moje práce můžeš najít na Instagramu @hruskova.jpg, kde sdílím především festivalové fotografie a snímky z přírody.
                                    </p>
                                    <img src="img/work1.jpg" alt="Fotografie" class="img-fluid rounded mt-3">
                                    <img src="img/work4.jpg" alt="Fotografie" class="img-fluid rounded mt-3" id="slavicek">

                                </div>
                            </div>
                        </div>

                        <!-- Sekce 2 - Grafický design -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                    Grafický design
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#aboutAccordion">
                                <div class="accordion-body">
                                    <p>
                                        Ráda se také pouštím do grafiky pro začínající firmy a domácí akce a festivaly. 
                                        Zaměřuji se na tvorbu plakátů, log a dalších propagačních materiálů.
                                    </p>
                                    <img src="img/work2.jpg" alt="Grafický design" class="img-fluid rounded mt-3">
                                    <img src="img/work5.jpg" alt="Grafický design" class="img-fluid rounded mt-3">
                                    <img src="img/work6.jpg" alt="Grafický design" class="img-fluid rounded mt-3">
                                </div>
                            </div>
                        </div>

                        <!-- Sekce 3 - Webový vývoj -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                    Webový vývoj
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#aboutAccordion">
                                <div class="accordion-body">
                                    <p>
                                        Věnuji se tvorbě webových stránek pomocí HTML, CSS, JavaScriptu a PHP.
                                        Učím se nové technologie a ráda pracuji na responzivních webech.
                                        Tento web najdete na <a href="https://jsemhruskova.github.io" target="_blank" class="links">jsemhruskova.github.io</a>

                                    </p>
                                    <img src="img/work3.jpg" alt="Webový vývoj" class="img-fluid rounded mt-3">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Patička -->
    <footer class="footer mt-5">
        <div class="container text-center py-4">
        <p class="mb-1"><strong>Lucie Hrušková</strong></p>
        <p class="mb-0"><small>hruskovalucie13@gmail.com</small></p>
        <p class="mb-0"><small>Telefon: 123 123 123</small></p>
        <p class="mb-0"><small>2026 ©</small></p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Vlastní JavaScript -->
    <script src="js/main.js"></script>
</body>
</html>
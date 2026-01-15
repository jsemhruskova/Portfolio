<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontakt - Lucie Hrušková</title>
    <meta name="description" content="Kontaktujte Lucii Hruškovou.">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Vlastní CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
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
                        <a class="nav-link" href="o-mne.php">o mně</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="kontakt.php">kontakt</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hlavní obsah -->
    <main class="contact-page py-5">
        <div class="container">
            <!-- Nadpis -->
            <div class="row mb-1">
                <div class="col-12">
                    <h1 class="page-title">Kdo jsem?</h1>
                </div>
            </div>

            <div class="row g-4">
                <!-- Levý sloupec -->
                <div class="col-12 col-lg-4 order-2 order-lg-1">
                    <!-- Kontaktní info -->
                    <div class="contact-info-box mb-4">
                        <h2 class="contact-name">Lucie Hrušková</h2>

                        <div class="contact-item">
                            <strong>E-mail:</strong><br>
                            hruskovalucie13@gmail.com
                        </div>

                        <div class="contact-item">
                            <strong>Instagram:</strong><br>
                            @hruskova.jpg
                        </div>

                        <div class="contact-item">
                            <strong>Adresa:</strong><br>
                            Nad Bránou 123<br>
                            Praha 9 19800
                        </div>
                    </div>

                    <!-- Mapa -->
                    <div class="map-box">
                        <h3 class="map-title">Mapa</h3>
                        <div class="ratio ratio-4x3">
                            <iframe 
                                src="https://mapy.com/s/renevocuko" 
                                style="border:0;border-radius:10px" 
                                allowfullscreen="" 
                                loading="lazy"
                                title="Mapa">
                            </iframe>
                        </div>
                    </div>
                </div>

                <!-- Pravý sloupec - Formulář -->
                <div class="col-12 col-lg-8 order-1 order-lg-2">
                    <div class="contact-form-box">
                        <h2 class="form-title">Pojďme se spojit!<br><span class="form-subtitle">Řekněte mi něco o vás :)</span></h2>

                        <form id="contactForm" method="POST" action="contact.php">
                            <div class="mb-3">
                                <input type="text" class="form-control" name="name" placeholder="Jméno a příjmení *" required>
                            </div>

                            <div class="mb-3">
                                <input type="email" class="form-control" name="email" placeholder="E-mail *" required>
                            </div>

                            <div class="mb-3">
                                <input type="tel" class="form-control" name="phone" placeholder="Telefon">
                            </div>

                            <div class="mb-4">
                                <textarea class="form-control" name="message" rows="6" placeholder="Zpráva *" required></textarea>
                            </div>

                            <div class="mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="services[]" value="web" id="web">
                                    <label class="form-check-label" for="web">Tvorba webu</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="services[]" value="photo" id="photo">
                                    <label class="form-check-label" for="photo">Fotografie</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="services[]" value="graphics" id="graphics">
                                    <label class="form-check-label" for="graphics">Grafický design</label>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary btn-custom-blue" data-text="Jdeme na to!"></button>
                        </form>
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
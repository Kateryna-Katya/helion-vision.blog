<?php

$fullDomain = strtolower($_SERVER['HTTP_HOST'] ?? '');
$fullDomain = explode(':', $fullDomain)[0];

$parts = explode('.', $fullDomain);
$domainSlug = count($parts) >= 2
        ? $parts[count($parts) - 2]
        : $fullDomain;

$domainTitle = ucwords(str_replace('-', ' ', $domainSlug));

?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $domainTitle ?> — Politica sui Cookie</title>
    
    <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><rect width=%22100%22 height=%22100%22 rx=%2220%22 fill=%22%232563eb%22/><path d=%22M30 30L70 70M70 30L30 70%22 stroke=%22white%22 stroke-width=%2212%22 stroke-linecap=%22round%22/></svg>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500&family=Sora:wght@600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://unpkg.com/lucide@latest"></script>

    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="header">
        <div class="container header__container">
            <a href="./#hero" class="logo">
                <span class="logo__icon"></span>
                <span class="logo__text"><?= $domainTitle ?></span>
            </a>
            
            <nav class="nav">
                <ul class="nav__list">
                    <li><a href="./#hero" class="nav__link">Home</a></li>
                    <li><a href="./#courses" class="nav__link">Corsi</a></li>
                    <li><a href="./#benefits" class="nav__link">Vantaggi</a></li>
                    <li><a href="./#method" class="nav__link">Metodologia</a></li>
                    <li><a href="./#reviews" class="nav__link">Recensioni</a></li>
                </ul>
            </nav>

            <a href="./#contact" class="btn btn--header">
                <span>Contattaci</span>
                <i data-lucide="arrow-up-right"></i>
            </a>

            <button class="burger" aria-label="Menu">
                <span></span>
            </button>
        </div>
    </header>

    <main class="legal-page">
    <section class="pages">
        <div class="container">
            <span class="section-tag reveal-item">Documenti Legali</span>
            <h1 class="reveal-item">Politica sui file cookie</h1>

            <div class="legal-content">
                <p class="lead-text reveal-item">
                    Benvenuti su <strong><?= $domainTitle ?></strong>! Per migliorare la vostra esperienza 
                    di interazione con il nostro sito, garantire il suo corretto funzionamento e 
                    analizzare l'attività degli utenti, utilizziamo i file cookie e tecnologie simili.
                </p>

                <div class="legal-block reveal-item">
                    <h2>Cosa sono i file cookie?</h2>
                    <p>
                        Un file cookie è un piccolo frammento di dati (file di testo) 
                        che un sito web salva sul vostro dispositivo quando lo visitate. 
                        Questo permette alla piattaforma <strong><?= $domainTitle ?></strong> di "ricordare" le vostre azioni e preferenze 
                        (ad esempio, login, lingua, impostazioni della regione Italia e altri parametri) 
                        per un certo periodo di tempo.
                    </p>
                </div>

                <div class="legal-block reveal-item">
                    <h2>Quali tipi di cookie utilizziamo?</h2>
                    <p>
                        Classifichiamo i cookie utilizzati sul sito <strong><?= $fullDomain ?></strong> nelle 
                        seguenti categorie:
                    </p>
                    <ul class="legal-list">
                        <li>
                            <strong>Strettamente necessari:</strong> Fondamentali per il funzionamento. Permettono di navigare tra le pagine di <strong><?= $domainTitle ?></strong>.
                        </li>
                        <li>
                            <strong>Analitici:</strong> Raccolta di informazioni anonime su come i visitatori utilizzano il nostro sito.
                        </li>
                        <li>
                            <strong>Funzionali:</strong> Permettono di ricordare le vostre scelte per un'esperienza personalizzata nell'ambito della formazione IT.
                        </li>
                        <li>
                            <strong>Di marketing:</strong> Utilizzati per fornire annunci pertinenti ai vostri interessi.
                        </li>
                    </ul>
                </div>

                <div class="legal-block reveal-item">
                    <h2>Perché utilizziamo i cookie?</h2>
                    <ul class="legal-list">
                        <li>Garantire un funzionamento stabile e sicuro della piattaforma.</li>
                        <li>Analizzare il comportamento degli utenti per ottimizzare i corsi.</li>
                        <li>Personalizzare i contenuti per gli utenti in Europa.</li>
                        <li>Fornire materiali di marketing pertinenti.</li>
                    </ul>
                </div>

                <div class="legal-block reveal-item">
                    <h2>Le vostre scelte e gestione</h2>
                    <p>
                        Avete il pieno controllo sui file cookie. Potete in qualsiasi 
                        momento modificare le vostre impostazioni nel browser. Tuttavia, 
                        tenete presente che la disattivazione dei cookie strettamente necessari può 
                        causare il malfunzionamiento di alcune funzioni.
                    </p>
                </div>

                <div class="contact-info-block reveal-item">
                    <h2>Informazioni di contatto</h2>
                    <p>
                        Se avete domande riguardanti la politica su <strong><?= $domainTitle ?></strong>, contattateci:
                    </p>
                    <ul class="contact-data">
                        <li>
                            <i data-lucide="mail"></i>
                            <strong>Email:</strong> <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a>
                        </li>
                        <li>
                            <i data-lucide="phone"></i>
                            <strong>Telefono:</strong> <a href="tel:+390697639128">+39 06 9763 9128</a>
                        </li>
                        <li>
                            <i data-lucide="map-pin"></i>
                            <strong>Indirizzo:</strong> Via della Conciliazione, 15, 00193 Roma RM, Italia
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>

    <footer class="footer">
        <div class="container footer__grid">
            <div class="footer__col">
                <a href="./#hero" class="logo logo--footer">
                    <span class="logo__text"><?= $domainTitle ?></span>
                </a>
                <p class="footer__tagline">Tecnologie di nuova generazione per il tuo successo professionale.</p>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Navigazione</h4>
                <ul class="footer__links">
                    <li><a href="./#hero">Home</a></li>
                    <li><a href="./#courses">Corsi</a></li>
                    <li><a href="./#benefits">Vantaggi</a></li>
                    <li><a href="./#reviews">Recensioni</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Informazioni Legali</h4>
                <ul class="footer__links">
                    <li><a href="./privacy.php">Privacy Policy</a></li>
                    <li><a href="./cookies.php">Cookie Policy</a></li>
                    <li><a href="./terms.php">Termini di Utilizzo</a></li>
                    <li><a href="./personal-data-policy.php">Dati Personali</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Contatti</h4>
                <ul class="footer__contact-list">
                    <li>
                        <i data-lucide="phone"></i>
                        <a href="tel:+390697639128">+39 06 9763 9128</a>
                    </li>
                    <li>
                        <i data-lucide="mail"></i>
                        <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a>
                    </li>
                    <li>
                        <i data-lucide="map-pin"></i>
                        <span>Via della Conciliazione, 15, 00193 Roma RM, Italia</span>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="container footer__bottom">
            <p>&copy; 2026 <?= $domainTitle ?>. Tutti i diritti riservati.</p>
            <div class="footer__legal-inline">
                <a href="./return.php">Rimborsi</a>
                <a href="./disclaimer.php">Disclaimer</a>
                <a href="./contact.php">Contatti</a>
            </div>
        </div>
    </footer>

    <div id="cookie-popup" class="cookie-popup">
        <p>Questo sito utilizza i cookie per migliorare l'esperienza. Maggiori informazioni nella nostra <a href="./cookies.php">Cookie Policy</a>.</p>
        <button id="cookie-accept" class="btn btn--header">Accetta</button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.19/bundled/lenis.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
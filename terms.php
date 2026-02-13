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
    <title><?= $domainTitle ?> — Termini di Utilizzo</title>
    
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
            <span class="section-tag reveal-item">Terms & Conditions</span>
            <h1 class="reveal-item">Termini di Utilizzo</h1>

            <div class="legal-content">
                <div class="policy-hero-card terms-accent reveal-item">
                    <p>
                        Benvenuti sulla piattaforma <strong><?= $domainTitle ?></strong>! I presenti Termini di Utilizzo
                        rappresentano un contratto legalmente vincolante tra l'utente (di seguito — «Utente») e <strong><?= $domainTitle ?></strong>.
                        Utilizzando il nostro sito, confermate la vostra piena accettazione di tali Termini entro la giurisdizione dell'UE.
                    </p>
                </div>

                <div class="legal-section reveal-item">
                    <h2>1. Oggetto dell'Accordo</h2>
                    <p>
                        L'Azienda fornisce all'Utente l'accesso per l'utilizzo del sito
                        <strong><?= $fullDomain ?></strong> e delle sue funzionalità, tra cui: accesso a
                        materiali didattici innovativi, corsi interattivi, consulenze di carriera e un'infrastruttura 
                        digitale all'avanguardia per lo sviluppo delle competenze IT.
                    </p>
                </div>

                <div class="legal-section reveal-item">
                    <h2>2. Obblighi e diritti dell'Utente</h2>
                    <p>Durante l'utilizzo della piattaforma <strong><?= $domainTitle ?></strong> è vietato:</p>
                    <ul class="legal-list">
                        <li>Pubblicare o trasmettere qualsiasi informazione illegale, dannosa o diffamatoria.</li>
                        <li>Intraprendere azioni che possano interrompere il funzionamento dell'infrastruttura digitale di <strong><?= $domainTitle ?></strong>.</li>
                        <li>Utilizzare script automatizzati per raccogliere informazioni senza autorizzazione scritta.</li>
                        <li>Fornire informazioni false durante la registrazione ai corsi o alle consulenze.</li>
                    </ul>
                </div>

                <div class="legal-section reveal-item">
                    <h2>3. Proprietà Intellettuale</h2>
                    <div class="property-block">
                        <div class="property-block__icon">
                            <i data-lucide="copyright"></i>
                        </div>
                        <p>
                            Tutti i contenuti su <strong><?= $fullDomain ?></strong> (testi, codice di programmazione, grafica, loghi) sono proprietà esclusiva dell'Azienda. 
                            Viene concessa una licenza limitata per l'uso personale a fini didattici. La copia dei materiali è severamente vietata.
                        </p>
                    </div>
                </div>

                <div class="legal-section reveal-item">
                    <h2>4. Limitazione di Responsabilità</h2>
                    <div class="warning-block">
                        <p>
                            I servizi sono forniti nello stato in cui si trovano <strong>(«così come sono»)</strong>. L'Azienda non è responsabile per eventuali perdite 
                            derivanti dall'uso o dall'impossibilità di utilizzare la piattaforma <strong><?= $domainTitle ?></strong>.
                        </p>
                    </div>
                </div>

                <div class="legal-section reveal-item">
                    <h2>5. Modifiche e Risoluzione delle Controversie</h2>
                    <p>
                        Ci riserviamo il diritto di modificare i Termini in qualsiasi momento. Tutte le controversie saranno risolte tramite trattative costruttive tra le parti. 
                        In caso di mancato accordo, la controversia sarà soggetta alla giurisdizione italiana.
                    </p>
                </div>

                <div class="contact-footer-policy reveal-item">
                    <h2>Informazioni di contatto</h2>
                    <p>Se avete domande relative ai presenti Termini, vi preghiamo di contattarci:</p>
                    <ul class="contact-data">
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
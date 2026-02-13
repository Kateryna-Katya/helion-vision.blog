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
    <title><?= $domainTitle ?> — Informativa sul trattamento dei dati personali</title>
    
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
            <span class="section-tag reveal-item">Privacy & Security</span>
            <h1 class="reveal-item">Informativa sul trattamento dei dati personali</h1>

            <div class="legal-content">
                <div class="policy-intro reveal-item">
                    <h2>1. Disposizioni generali</h2>
                    <p>
                        La presente informativa sul trattamento dei dati personali (di seguito — 
                        "Informativa") definisce le procedure e le condizioni per il trattamento dei dati 
                        personali adottate dalla piattaforma <strong><?= $domainTitle ?></strong> (di seguito — "Titolare"), e 
                        stabilisce le misure per garantire la sicurezza di tali dati in conformità con i regolamenti UE (GDPR).
                    </p>
                    <p>
                        1.1. Il Titolare considera il rispetto dei diritti e delle libertà dell'uomo e del cittadino 
                        nel trattamento dei suoi dati personali, compresa la tutela del diritto alla 
                        riservatezza della vita privata, come obiettivo e condizione fondamentale della propria attività.
                    </p>
                    <p>
                        1.2. La presente Informativa si applica a tutte le informazioni che il 
                        Titolare può ottenere sui visitatori (di seguito — "Utenti") del sito web 
                        <strong><?= $fullDomain ?></strong>.
                    </p>
                </div>

                <div class="policy-section reveal-item">
                    <h2>2. Concetti fondamentali</h2>
                    <ul class="terminology-list">
                        <li>
                            <strong>Sito web</strong> — l'insieme dei materiali grafici e informativi di 
                            <strong><?= $fullDomain ?></strong>.
                        </li>
                        <li><strong>Utente</strong> — qualsiasi visitatore del sito web.</li>
                        <li>
                            <strong>Dati personali</strong> — qualsiasi informazione relativa direttamente o 
                            indirettamente all'Utente (soggetto interessato).
                        </li>
                        <li>
                            <strong>Trattamento dei dati</strong> — qualsiasi operazione effettuata con i dati (raccolta, registrazione, organizzazione, conservazione).
                        </li>
                    </ul>
                </div>

                <div class="policy-section reveal-item">
                    <h2>3. Dati che trattiamo</h2>
                    <div class="data-grid">
                        <div class="data-item">
                            <div class="data-item__icon">
                                <i data-lucide="user-check"></i>
                            </div>
                            <div>
                                <strong>Dati identificativi:</strong>
                                <p>Nome, Email, numero di telefono per il contatto.</p>
                            </div>
                        </div>
                        <div class="data-item">
                            <div class="data-item__icon">
                                <i data-lucide="monitor-smartphone"></i>
                            </div>
                            <div>
                                <strong>Dati tecnici:</strong>
                                <p>Cookie, indirizzo IP anonimizzato, dati del browser.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="policy-section reveal-item">
                    <h2>4. Finalità del trattamento</h2>
                    <ul class="legal-list">
                        <li>Identificazione dell'Utente per l'accesso alla piattaforma didattica.</li>
                        <li>Stabilire un feedback e gestire le richieste in entrata.</li>
                        <li>Esecuzione dei contratti e fornitura di servizi educativi.</li>
                        <li>Miglioramento della qualità della scuola IT basato sull'analisi dei dati.</li>
                    </ul>
                </div>

                <div class="policy-section reveal-item">
                    <h2>5. Base giuridica</h2>
                    <p>Il Titolare tratta i dati solo previo consenso esplicito, espresso attraverso l'uso dei moduli sul sito o le impostazioni dei file "cookie" nel browser. Garantiamo la riservatezza dei dati all'interno dell'infrastruttura di <strong><?= $domainTitle ?></strong>.</p>
                </div>

                <div class="policy-section contact-footer-policy reveal-item">
                    <h2>6. Domande e feedback</h2>
                    <p>In caso di domande riguardanti i vostri dati, potete inviare una richiesta al nostro servizio di supporto:</p>
                    <a href="mailto:hello@<?= $fullDomain ?>" class="policy-mail">hello@<?= $fullDomain ?></a>
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
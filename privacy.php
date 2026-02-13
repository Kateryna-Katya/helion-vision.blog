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
    <title><?= $domainTitle ?> — Informativa sulla Privacy</title>
    
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
            <span class="section-tag reveal-item">Privacy Policy</span>
            <h1 class="reveal-item">Informativa sulla Privacy</h1>

            <div class="legal-content">
                <div class="policy-hero-card reveal-item">
                    <p>
                        L'Informativa sulla Privacy si applica ai dati personali forniti dagli studenti di <strong><?= $domainTitle ?></strong>, sia per l'erogazione di servizi educativi che per altre interazioni all'interno della nostra infrastruttura digitale innovativa.
                    </p>
                </div>

                <div class="policy-notice reveal-item">
                    <p>
                        <strong><?= $domainTitle ?></strong> si riserva il diritto di apportare modifiche alle disposizioni della presente Informativa in conformità con la legislazione UE (GDPR). Si prega di notare che le nostre risorse possono contenere collegamenti a servizi di terze parti. Fornendo i propri dati, l'utente presta il pieno consenso al loro trattamento secondo le modalità previste dalla presente Informativa.
                    </p>
                </div>

                <h2 class="reveal-item">Modalità di raccolta, conservazione e cancellazione</h2>
                <div class="storage-info reveal-item">
                    <div class="storage-item">
                        <i data-lucide="calendar-clock"></i>
                        <span>Periodo di conservazione fino a <strong>75 anni</strong></span>
                    </div>
                    <div class="storage-item">
                        <i data-lucide="check-circle-2"></i>
                        <span>Solo con il tuo consenso</span>
                    </div>
                </div>
                <p class="reveal-item">
                    Per prevenire la perdita di dati, utilizziamo un complesso completo di misure di sicurezza informatica. La distruzione o il blocco dei dati avviene su richiesta del cliente o al raggiungimento degli scopi della raccolta (conclusione della formazione).
                </p>

                <div class="data-collection-grid">
                    <div class="data-box reveal-item">
                        <h3><i data-lucide="terminal"></i> Informazioni tecniche</h3>
                        <ul>
                            <li>Indirizzo IP e orario di accesso</li>
                            <li>Fonti di provenienza verso <strong><?= $fullDomain ?></strong></li>
                            <li>Dati del browser e comportamento sulla piattaforma</li>
                        </ul>
                    </div>
                    <div class="data-box reveal-item">
                        <h3><i data-lucide="fingerprint"></i> Personalizzazione</h3>
                        <ul>
                            <li>Nome utente</li>
                            <li>E-mail e numero di telefono</li>
                            <li>Dati relativi ai contratti di studio e ai corsi</li>
                        </ul>
                    </div>
                </div>

                <h2 class="reveal-item">Finalità del trattamento dei dati personali</h2>
                <ul class="legal-list reveal-item">
                    <li>Fornire l'accesso alla piattaforma didattica dell'anno.</li>
                    <li>Considerare le preferenze degli utenti nello sviluppo di nuovi programmi formativi.</li>
                    <li>Informare su aggiornamenti dei corsi e nuove tecnologie.</li>
                    <li>Garantire un supporto esperto e tempestivo.</li>
                </ul>

                <h2 class="reveal-item">Utilizzo dei Cookie</h2>
                <p class="reveal-item">
                    I file cookie ci consentono di analizzare il traffico e salvare le tue preferenze (ad esempio, le impostazioni della regione Italia), per rendere più comodo l'utilizzo di <strong><?= $fullDomain ?></strong>. Puoi gestirli attraverso le impostazioni del tuo browser.
                </p>

                <div class="rights-block reveal-item">
                    <h2>I tuoi diritti</h2>
                    <p>
                        Se desideri modificare i tuoi dati, ricevere un estratto o interromperne il trattamento, contatta il team di <strong><?= $domainTitle ?></strong>:
                    </p>
                    <a href="mailto:hello@<?= $fullDomain ?>" class="contact-btn">hello@<?= $fullDomain ?></a>
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
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
    <title><?= $domainTitle ?> — Esclusione di Responsabilità</title>
    
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
            <span class="section-tag reveal-item">Risk Disclosure</span>
            
            <div class="legal-header reveal-item">
                <div class="legal-header__icon">
                    <i data-lucide="alert-triangle"></i>
                </div>
                <h1>Esclusione di responsabilità</h1>
            </div>

            <div class="legal-content">
                <div class="legal-block reveal-item">
                    <p>
                        <strong>Informazioni generali:</strong> Tutti i materiali, gli articoli e le informazioni 
                        pubblicati sul sito <strong><?= $domainTitle ?></strong> sono forniti esclusivamente a scopo 
                        informativo e didattico. Non costituiscono e non devono essere 
                        considerati come consulenza finanziaria, legale o professionale personalizzata, 
                        offerta al pubblico o invito a compiere operazioni finanziarie nel settore IT o della consulenza.
                    </p>
                </div>

                <div class="legal-block reveal-item">
                    <p>
                        <strong>Assenza di garanzie:</strong> Il team di <strong><?= $domainTitle ?></strong> non fornisce alcuna garanzia 
                        riguardo all'accuratezza, completezza o attualità delle informazioni presentate. Qualsiasi riferimento a potenziale crescita professionale, reddito passivo o risultati 
                        passati dei nostri studenti non garantisce risultati analoghi in futuro. 
                        I risultati individuali dipendono da numerosi fattori, inclusi l'impegno personale, e possono variare significativamente dai casi riportati.
                    </p>
                </div>

                <div class="legal-block reveal-item">
                    <p>
                        <strong>Limitazione di responsabilità:</strong> L'amministrazione del sito <strong><?= $fullDomain ?></strong>, 
                        i suoi proprietari e affiliati non sono responsabili per 
                        qualsiasi danno diretto o indiretto, decisioni o azioni 
                        intraprese dall'utente sulla base delle informazioni contenute in questa risorsa. Ogni 
                        responsabilità per l'uso delle metodologie e le possibili conseguenze 
                        ricade esclusivamente sull'utente. Il contenuto della piattaforma <strong><?= $domainTitle ?></strong> è raccolto da 
                        fonti ritenute affidabili e aggiornate per il mercato UE.
                    </p>
                </div>

                <div class="legal-block risk-warning reveal-item">
                    <div class="warning-badge">Nota importante</div>
                    <p>
                        <strong>Avvertenza sui rischi:</strong> Qualsiasi attività volta a 
                        cambiare lo status professionale o gli investimenti nella formazione comporta un 
                        certo livello di rischio personale. Prima di prendere 
                        decisioni importanti, raccomandiamo di condurre una ricerca propria e di consultare un esperto indipendente nel settore di riferimento.
                    </p>
                </div>

                <div class="legal-block agreement reveal-item">
                    <p>
                        <strong>Conferma dell'utente:</strong> Continuando a utilizzare il 
                        sito <strong><?= $domainTitle ?></strong>, confermi di avere almeno 18 anni, di 
                        agire di tua spontanea volontà e di comprendere e accettare pienamente tutti 
                        i rischi e le condizioni menzionati in questa esclusione di responsabilità.
                    </p>
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
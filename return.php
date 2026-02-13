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
    <title><?= $domainTitle ?> — Politica di Rimborso</title>
    
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
            <span class="section-tag reveal-item">Pagamenti e Rimborsi</span>
            <h1 class="reveal-item">Politica di Rimborso</h1>
            
            <div class="legal-content">
                <div class="policy-hero-card refund-accent reveal-item">
                    <p>
                        Puntiamo alla massima trasparenza nel rapporto con i nostri studenti. 
                        Su <strong><?= $domainTitle ?></strong> è prevista una chiara procedura di rimborso, 
                        basata sulla qualità dei servizi offerti e sugli standard europei di tutela dei consumatori.
                    </p>
                </div>

                <h2 class="reveal-item">Condizioni per richiedere un rimborso</h2>
                <div class="refund-grid">
                    <div class="refund-card reveal-item">
                        <div class="refund-card__icon"><i data-lucide="file-warning"></i></div>
                        <h3>Incoerenza con il programma</h3>
                        <p>Se il contenuto dei materiali differisce sostanzialmente da quanto dichiarato nella descrizione del corso su <strong><?= $domainTitle ?></strong>.</p>
                    </div>
                    <div class="refund-card reveal-item">
                        <div class="refund-card__icon"><i data-lucide="server-crash"></i></div>
                        <h3>Problemi tecnici</h3>
                        <p>Errori critici della piattaforma <strong><?= $fullDomain ?></strong> che non sono stati risolti dal nostro supporto entro tempi ragionevoli.</p>
                    </div>
                    <div class="refund-card reveal-item">
                        <div class="refund-card__icon"><i data-lucide="timer"></i></div>
                        <h3>Periodo di ripensamento</h3>
                        <p>Recesso entro 14 giorni dal pagamento, a condizione che non sia stato utilizzato più del 10% del contenuto didattico.</p>
                    </div>
                </div>

                <div class="procedure-block reveal-item">
                    <h2>Procedura di richiesta rimborso</h2>
                    <p>Per avviare la procedura sulla piattaforma <strong><?= $domainTitle ?></strong>, segui questi passaggi:</p>
                    <div class="steps-mini">
                        <div class="step-mini"><span>1</span> Invia un'email a <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a></div>
                        <div class="step-mini"><span>2</span> Oggetto: "Richiesta di rimborso"</div>
                        <div class="step-mini"><span>3</span> Dati: Nome, Cognome, Email, Nome del corso</div>
                        <div class="step-mini"><span>4</span> Descrizione dettagliata del motivo della richiesta</div>
                    </div>
                </div>

                <h2 class="reveal-item">Tempi e modalità di rimborso</h2>
                <p class="reveal-item">
                    Dopo l'approvazione della tua richiesta, il rimborso verrà 
                    effettuato entro <strong>7–14 giorni lavorativi</strong>. I fondi saranno restituiti 
                    attraverso lo stesso metodo utilizzato per il pagamento. Nota che i tempi effettivi di accredito 
                    dipendono dai regolamenti della tua banca in Italia o nel tuo paese di residenza.
                </p>

                <div class="warning-block reveal-item">
                    <h2>Eccezioni e limitazioni</h2>
                    <ul class="legal-list">
                        <li>La richiesta viene inviata dopo 14 giorni di calendario dalla transazione.</li>
                        <li>Hai già visualizzato o scaricato una parte significativa dei materiali del programma.</li>
                        <li>Problemi tecnici lato utente (software non compatibile, connessione internet scadente).</li>
                        <li>Violazione grave dei termini dell'Accordo per l'Utente di <strong><?= $domainTitle ?></strong>.</li>
                    </ul>
                </div>

                <div class="contact-footer-policy reveal-item">
                    <h2>Contattaci</h2>
                    <p>Per tutte le domande relative ai rimborsi, contatta il nostro ufficio finanziario:</p>
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
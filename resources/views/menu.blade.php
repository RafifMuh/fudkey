<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Fudkey Menu</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        @font-face {
            font-family: 'Gantari';
            src: url('/Gantari/Gantari-VariableFont_wght.ttf') format('truetype');
            font-weight: 100 900;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Gantari';
            src: url('/Gantari/Gantari-Italic-VariableFont_wght.ttf') format('truetype');
            font-weight: 100 900;
            font-style: italic;
            font-display: swap;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --orange: #FF3700;
            --cream: #F6EAD7;
            --cream-dark: #F1E1C6;
            --blue: #1D6ADE;
        }

        body {
            min-height: 100vh;
            min-height: 100dvh;
            background-color: #2c2c2c;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            font-family: 'Gantari', sans-serif;
            letter-spacing: -0.04em;
            padding: 10px;
        }

        .menu-page {
            width: 100%;
            max-width: 390px;
            min-height: 100vh;
            min-height: 100dvh;
            padding: 24px 18px 30px;
            background-color: var(--orange);
            color: #fff;
            position: relative;
        }

        @media (max-width: 430px) {
            body {
                padding: 0;
            }

            .menu-page {
                max-width: 100%;
                width: 100%;
                min-height: 100vh;
                min-height: 100dvh;
            }
        }

        .menu-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 14px;
        }

        .menu-flag {
            width: 78px;
            height: auto;
        }

        .menu-title h1 {
            font-size: 46px;
            font-weight: 800;
            line-height: 1;
            margin-bottom: 6px;
            letter-spacing: -0.02em;
        }

        .menu-title p {
            font-size: 13px;
            font-weight: 600;
            opacity: 0.9;
        }

        .menu-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 12px;
            margin-top: 18px;
        }

        .menu-card {
            background-color: var(--cream);
            border-radius: 20px;
            padding: 10px;
            min-height: 230px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            box-shadow: 0 8px 18px rgba(0, 0, 0, 0.1);
        }

        .menu-thumb {
            width: 100%;
            background-color: var(--cream-dark);
            border-radius: 16px;
            aspect-ratio: 1 / 1;
            display: block;
            object-fit: cover;
        }

        .menu-info {
            padding: 10px 4px 2px;
        }

        .menu-info h3 {
            color: var(--orange);
            font-size: 16px;
            font-weight: 800;
            line-height: 1.1;
            margin-bottom: 8px;
        }

        .menu-price {
            color: var(--blue);
            font-size: 16px;
            font-weight: 800;
            display: inline-flex;
            gap: 4px;
            align-items: baseline;
            justify-content: flex-end;
            width: 100%;
        }

        .menu-price span {
            font-size: 12px;
            font-weight: 700;
        }

        .menu-footer {
            margin-top: 24px;
            text-align: center;
        }

        .social-icons {
            display: flex;
            justify-content: center;
            gap: 18px;
            margin: 10px 0 18px;
        }

        .social-icons a {
            color: #fff;
            font-size: 18px;
            text-decoration: none;
            transition: transform 0.2s ease, opacity 0.2s ease;
        }

        .social-icons a:hover {
            transform: scale(1.15);
            opacity: 0.8;
        }

        .footer-links {
            margin: 0 6px 16px;
            text-align: left;
        }

        .footer-link {
            display: block;
            color: #fff;
            text-decoration: none;
            font-size: 13px;
            font-weight: 700;
            padding: 7px 0;
            border-bottom: 2px solid rgba(255, 255, 255, 0.7);
        }

        .copyright {
            color: #fff;
            font-weight: 700;
            font-size: 13px;
            letter-spacing: 0.02em;
            margin-top: 24px;
        }
    </style>
</head>
<body>
    <div class="menu-page">
        <header class="menu-header">
            <a href="/home" aria-label="Ke Home">
                <img class="menu-flag" src="/images/sticker-flag.png" alt="Fudkey Club">
            </a>
        </header>

        <div class="menu-title">
            <h1>MENU</h1>
            <p>Sajian Terbaik untuk Teman Fudkey</p>
        </div>

        <section class="menu-grid">
            <article class="menu-card">
                <img class="menu-thumb" src="/images/nasi-uduk.png" alt="Nasi Uduk Polos">
                <div class="menu-info">
                    <h3>Nasi Uduk<br>Polos</h3>
                    <div class="menu-price">8K/<span>porsi</span></div>
                </div>
            </article>
            <article class="menu-card">
                <img class="menu-thumb" src="/images/ayam-goreng-laos.jpg" alt="Ayam Goreng Laos">
                <div class="menu-info">
                    <h3>Ayam Goreng<br>Laos</h3>
                    <div class="menu-price">7K/<span>porsi</span></div>
                </div>
            </article>
            <article class="menu-card">
                <img class="menu-thumb" src="/images/mendoan.png" alt="Tempe Mendoan">
                <div class="menu-info">
                    <h3>Tempe<br>Mendoan</h3>
                    <div class="menu-price">5K/<span>porsi</span></div>
                </div>
            </article>
            <article class="menu-card">
                <img class="menu-thumb" src="/images/telor-bulat.jpg" alt="Telor Bulet">
                <div class="menu-info">
                    <h3>Telor Bulet</h3>
                    <div class="menu-price">3K/<span>biji</span></div>
                </div>
            </article>
            <article class="menu-card">
                <img class="menu-thumb" src="/images/telur-dadar%20(1).jpg" alt="Telor Dadar">
                <div class="menu-info">
                    <h3>Telor Dadar</h3>
                    <div class="menu-price">3K/<span>porsi</span></div>
                </div>
            </article>
            <article class="menu-card">
                <img class="menu-thumb" src="/images/sate-usus.jpg" alt="Sate Usus">
                <div class="menu-info">
                    <h3>Sate Usus</h3>
                    <div class="menu-price">3K/<span>porsi</span></div>
                </div>
            </article>
            <article class="menu-card">
                <img class="menu-thumb" src="/images/dadar-jagung.jpg" alt="Dadar Jagung">
                <div class="menu-info">
                    <h3>Dadar Jagung</h3>
                    <div class="menu-price">2K/<span>porsi</span></div>
                </div>
            </article>
        </section>

        <div class="menu-footer">
            <div class="social-icons">
                <a href="#" aria-label="Email"><i class="far fa-envelope"></i></a>
                <a href="#" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                <a href="https://www.tiktok.com/@sarapan.fudkey?_r=1&_t=ZS-9344jpHnFEC" aria-label="TikTok"><i class="fab fa-tiktok"></i></a>
                <a href="https://www.instagram.com/fudkey_?igsh=MTRybm15eXE3NWxlNQ%3D%3D&utm_source=qr" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
            </div>

            <div class="footer-links">
                <a href="/about" class="footer-link">About us</a>
                <a href="/contact" class="footer-link">Contact</a>
                <a href="/csr" class="footer-link">CSR</a>
            </div>

            <p class="copyright">FUDKEY&copy;2026</p>
        </div>
    </div>
</body>
</html>

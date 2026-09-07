<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Fudkey RSVP</title>
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

        .rsvp-page {
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

            .rsvp-page {
                max-width: 100%;
                width: 100%;
                min-height: 100vh;
                min-height: 100dvh;
            }
        }

        .rsvp-header {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            margin-bottom: 14px;
        }

        .rsvp-flag {
            width: 78px;
            height: auto;
        }

        .rsvp-title h1 {
            font-size: 46px;
            font-weight: 800;
            line-height: 1;
            margin-bottom: 6px;
            letter-spacing: -0.02em;
        }

        .rsvp-title p {
            font-size: 13px;
            font-weight: 600;
            opacity: 0.9;
        }

        .rsvp-placeholder {
            background-color: var(--cream);
            color: var(--orange);
            border-radius: 22px;
            padding: 70px 16px;
            margin-top: 18px;
            text-align: center;
            font-size: 20px;
            font-weight: 800;
            letter-spacing: -0.01em;
            box-shadow: 0 8px 18px rgba(0, 0, 0, 0.12);
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
    <div class="rsvp-page">
        <header class="rsvp-header">
            <a href="/home" aria-label="Ke Home">
                <img class="rsvp-flag" src="/images/sticker-flag.png" alt="Fudkey Club">
            </a>
        </header>

        <div class="rsvp-title">
            <h1>RSVP</h1>
            <p>Memesan Lebih Awal untuk Teman Fudkey</p>
        </div>

        <div class="rsvp-placeholder">Coming soon</div>

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

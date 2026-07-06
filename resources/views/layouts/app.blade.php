<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Robot Kit - Pembelajaran STEM Masa Depan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary-blue: #38bdf8;
            --premium-gradient: linear-gradient(90deg, #6366f1, #38bdf8);
            --dark-bg: #0f172a;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            background: var(--dark-bg);
            color: white;
            overflow-x: hidden;
            scroll-behavior: smooth;
        }

        /* NAVBAR - Diperbaiki agar menu mobile terlihat jelas */
        .navbar {
            background: rgba(15, 23, 42, 0.8) !important;
            backdrop-filter: blur(15px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
            transition: 0.3s;
        }

        .navbar-brand {
            letter-spacing: 1px;
            font-size: 1.2rem;
        }

        /* HERO SECTION */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            background: radial-gradient(circle at top, #1e3a8a, #020617);
            padding-top: 80px; /* Jarak untuk navbar fixed */
        }

        /* SHIMMER TEXT */
        .shimmer-text {
            font-size: 3.5rem;
            font-weight: 800;
            background: linear-gradient(90deg, #94a3b8, #fff, #38bdf8, #fff, #94a3b8);
            background-size: 200%;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: shimmer 4s infinite linear;
            line-height: 1.2;
        }

        @keyframes shimmer {
            0% { background-position: -200%; }
            100% { background-position: 200%; }
        }

        /* SECTION SPACING */
        section {
            padding: 100px 0;
        }

        /* GLASS EFFECT */
        .glass {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 16px;
            backdrop-filter: blur(5px);
            transition: 0.3s;
        }
        .glass:hover {
            background: rgba(255, 255, 255, 0.05);
            border-color: var(--primary-blue);
        }

        /* BUTTONS */
        .btn-premium {
            background: var(--premium-gradient);
            border: none;
            color: white;
            font-weight: 600;
            border-radius: 50px;
            transition: 0.3s;
            box-shadow: 0 4px 15px rgba(56, 189, 248, 0.3);
        }
        .btn-premium:hover {
            transform: scale(1.05);
            color: white;
            box-shadow: 0 6px 20px rgba(56, 189, 248, 0.5);
        }

        .btn-outline-light {
            border-radius: 50px;
            border: 1px solid rgba(255,255,255,0.2);
        }

        /* RESPONSIVE OPTIMIZATION */
        @media (max-width: 991px) {
            .navbar-collapse {
                background: #1e293b;
                margin-top: 15px;
                padding: 20px;
                border-radius: 12px;
                border: 1px solid rgba(255,255,255,0.1);
            }
        }

        @media (max-width: 768px) {
            .shimmer-text {
                font-size: 2rem;
            }
            section {
                padding: 60px 0;
            }
            .hero {
                text-align: center;
                min-height: auto;
                padding-bottom: 80px;
            }
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #0f172a;
        }
        ::-webkit-scrollbar-thumb {
            background: #334155;
            border-radius: 10px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: var(--primary-blue);
        }
    </style>
</head>
<body>

    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

    <script>
        // Inisialisasi Animasi AOS
        AOS.init({
            duration: 800,
            once: true,
            offset: 100
        });

        // Efek Navbar saat di-scroll
        window.addEventListener('scroll', function() {
            const nav = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                nav.style.padding = '10px 0';
                nav.style.background = 'rgba(15, 23, 42, 0.95) !important';
            } else {
                nav.style.padding = '15px 0';
                nav.style.background = 'rgba(15, 23, 42, 0.8) !important';
            }
        });
    </script>

</body>
</html>
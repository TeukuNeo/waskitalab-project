<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waskita Lab Landing Page</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <header class="navbar">
        <div class="logo">
            <img src="{{ URL::to('/') }}/images/Waskita-Logo.png" width="100" height="50" alt="Waskita Lab Logo">
        </div>
        <nav>
            <ul>
                <li><a href="#">Tentang</a></li>
                <li><a href="#">Sumber</a></li>
                <li><a href="#">Proyek</a></li>
                <li><a href="#">Artikel</a></li>
                <li><a href="#">Kontak</a></li>
            </ul>
        </nav>
        <div class="user-menu">
            <a href="#">
                <i class="fa-solid fa-user-circle"></i>
                <i class="fa-solid fa-chevron-down"></i>
            </a>
        </div>
        <div class="hamburger-menu">
            <i class="fas fa-bars"></i>
        </div>
    </header>

    <main class="hero-section">
        <div class="content-left">
            <h1>Kembangkan<br>Potensi Diri Bersama<br>Waskita Lab</h1>
            <p>Siap hadapi dunia profesional dengan kemampuan sosial yang terasah? Di Waskita Lab, kami bantu Anda mengembangkan kemampuan interpersonal langsung dari rumah, tingkatkan daya saing dan jadilah pribadi yang siap bersinar.</p>
            <div class="cta-buttons">
                <a href="#" class="btn btn-primary">Tentang Kami</a>
                <a href="#" class="btn btn-secondary">Kontak Kami</a>
            </div>
        </div>
        <div class="content-right">
            <div class="image-container">
                <img src="{{ URL::to('/') }}/images/premium_landing_page.jpg" width="600" height="400" alt="Tim Waskita Lab">
                <div class="image-caption">
                    <p class="date">Juli 4</p>
                    <p class="title-caption">Mari Galih Lebih Dalam<br>Potensi Ananda Dengan<br>Waskita Lab</p>
                    <a href="#" class="cta-link">Temukan Acara <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </main>

    <script>
        const hamburger = document.querySelector('.hamburger-menu');
        const navMenu = document.querySelector('nav ul');

        hamburger.addEventListener('click', () => {
            navMenu.classList.toggle('active');
        });
    </script>
</body>

</html>
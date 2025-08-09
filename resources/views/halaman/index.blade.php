<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waskita Lab Landing Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* RESET CSS & Global Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Poppins', sans-serif;
    line-height: 1.6;
    color: #333;
    background-color: #f7f9fc;
}

a {
    text-decoration: none;
    color: inherit;
}

ul {
    list-style: none;
}

/* NAVBAR */
.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1.5rem 5%;
    background-color: #fff;
    box-shadow: 0 2px 4px rgba(0,0,0,0.05);
    position: sticky;
    top: 0;
    z-index: 1000;
}

.logo img {
    height: 40px; /* Sesuaikan ukuran logo */
}

.navbar nav ul {
    display: flex;
    gap: 2rem;
}

.navbar nav a {
    font-weight: 600;
    color: #555;
    transition: color 0.3s ease;
}

.navbar nav a:hover {
    color: #1a73e8; /* Warna saat di-hover */
}

.user-menu {
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.user-menu i {
    font-size: 1.2rem;
    color: #777;
}

.hamburger-menu {
    display: none; /* Sembunyikan di desktop */
    font-size: 1.5rem;
    cursor: pointer;
}

/* HERO SECTION */
.hero-section {
    display: flex;
    padding: 4rem 5%;
    gap: 3rem;
    align-items: center;
}

.content-left {
    flex: 1;
}

.content-left h1 {
    font-size: 3rem;
    font-weight: 700;
    line-height: 1.2;
    margin-bottom: 1.5rem;
    color: #2c3e50;
}

.content-left p {
    font-size: 1.1rem;
    margin-bottom: 2rem;
    color: #666;
}

.cta-buttons {
    display: flex;
    gap: 1rem;
}

.btn {
    padding: 0.75rem 2rem;
    border-radius: 50px;
    font-weight: 600;
    transition: all 0.3s ease;
    border: 2px solid transparent;
}

.btn-primary {
    background-color: #1a73e8;
    color: #fff;
}

.btn-primary:hover {
    background-color: #155bb5;
}

.btn-secondary {
    background-color: #fff;
    color: #1a73e8;
    border-color: #1a73e8;
}

.btn-secondary:hover {
    background-color: #f0f4fa;
}

.content-right {
    flex: 1;
    display: flex;
    justify-content: flex-end;
}

.image-container {
    position: relative;
    width: 100%;
    max-width: 600px;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 10px 20px rgba(0,0,0,0.1);
}

.image-container img {
    width: 100%;
    height: auto;
    display: block;
}

.image-caption {
    position: absolute;
    bottom: 20px;
    left: 20px;
    background-color: #fff;
    padding: 1.5rem 2rem;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    max-width: 80%;
}

.image-caption .date {
    color: #999;
    font-size: 0.9rem;
    margin-bottom: 0.5rem;
}

.image-caption .title-caption {
    font-weight: 700;
    font-size: 1.2rem;
    line-height: 1.3;
    margin-bottom: 1rem;
    color: #2c3e50;
}

.image-caption .cta-link {
    color: #1a73e8;
    font-weight: 600;
}

.image-caption .cta-link i {
    margin-left: 0.5rem;
}

/* MEDIA QUERIES for Responsive Design */
@media (max-width: 1024px) {
    .hero-section {
        flex-direction: column;
        text-align: center;
        gap: 2rem;
    }

    .content-left, .content-right {
        flex: auto;
    }

    .cta-buttons {
        justify-content: center;
    }

    .content-left h1 {
        font-size: 2.5rem;
    }

    .image-container {
        max-width: 100%;
    }

    .image-caption {
        bottom: 10px;
        left: 10px;
        padding: 1rem 1.5rem;
        max-width: 90%;
    }
}

@media (max-width: 768px) {
    .navbar nav {
        display: none; /* Sembunyikan menu di mobile */
        flex-direction: column;
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        background-color: #fff;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        padding: 1rem 0;
    }

    .navbar nav.active {
        display: flex; /* Tampilkan saat tombol hamburger diklik */
    }

    .navbar nav ul {
        flex-direction: column;
        gap: 1rem;
        text-align: center;
    }

    .user-menu {
        display: none;
    }

    .hamburger-menu {
        display: block; /* Tampilkan di mobile */
    }

    .hero-section {
        padding: 2rem 5%;
    }

    .content-left h1 {
        font-size: 2rem;
    }

    .content-left p {
        font-size: 1rem;
    }
}
    </style>
</head>
<body>
    <header class="navbar">
        <div class="logo">
            <img src="https://via.placeholder.com/150x50" alt="Waskita Lab Logo">
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
                <img src="./public/img/premium_landing_page.jpg" width="600" height="400" alt="Tim Waskita Lab">
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
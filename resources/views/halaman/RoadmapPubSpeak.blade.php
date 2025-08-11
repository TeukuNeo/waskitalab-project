<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Public Speaking</title>
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
    <h1>Roadmap Public Speaking</h1>
    <script src="{{ asset('js/index.js') }}"></script>
</body>
</html>
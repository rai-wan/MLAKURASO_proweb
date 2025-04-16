<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mlakuraso Dashboard</title>
    <style>
        /* Reset dasar */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f9f9f9;
            color: #333;
        }

        /* Navbar */
        .navbar {
            background-color: #ff6347;
            padding: 15px 30px;
            color: #fff;
        }

        .navbar .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar .logo {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .navbar ul {
            display: flex;
            gap: 20px;
            list-style: none;
        }

        .navbar ul li a {
            color: white;
            text-decoration: none;
            font-weight: 500;
        }

        .logout-button {
            background-color: #fff;
            color: #ff6347;
            border: none;
            padding: 8px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }

        .profile-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-left: 15px;
            object-fit: cover;
        }

        /* Hero Section */
        .hero-section {
            padding: 80px 30px;
            color: white;
            text-align: center;
        }

        .hero-section .welcome-text h2 {
            font-size: 2rem;
            margin-bottom: 10px;
        }

        .hero-section .order-tips p {
            font-size: 1.2rem;
            margin: 5px 0;
        }

        /* Icon Section */
        .icon-section {
            padding: 40px 20px;
            background-color: #fff;
        }

        .icon-section .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
        }

        .icon {
            text-align: center;
            width: 120px;
        }

        .icon img {
            width: 80px;
            height: 80px;
            object-fit: contain;
        }

        .icon p {
            margin-top: 10px;
            font-weight: 500;
        }

        @media (max-width: 600px) {
            .navbar .container {
                flex-direction: column;
                align-items: flex-start;
            }

            .navbar ul {
                flex-direction: column;
                gap: 10px;
            }

            .hero-section {
                padding: 60px 20px;
            }

            .icon-section .container {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="container">
            <div class="logo">MLAKURASO</div>
            <ul>
                <li><a href="{{ url('/trending') }}">Rekomendasi</a></li>
                <li><a href="{{ url('/event') }}">Event</a></li>
                <li><a href="{{ url('/kategori') }}">Kategori</a></li>
            
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="welcome-text">
                <h2>Welcome to Mlakuraso,</h2>
                <p>Discover Your Next Culinary Adventure!</p>
            </div>
            <div class="order-tips">
                <p>lapar ga sih?!</p>
                <p>buruan order</p>
                <p>ada event menarik nih!!</p>
            </div>
        </div>
    </section>

    <!-- Icon Section -->
    <section class="icon-section">
        <div class="container">
            <div class="icon">
                <a href="{{ url('/kategori') }}">
                    <img src="{{ asset('img/rumah_makan.png') }}" alt="Tempat Makan">
                    <p>Tempat makan</p>
                </a>
            </div>
            <div class="icon">
                <a href="{{ url('/event') }}">
                    <img src="{{ asset('img/event.png') }}" alt="Event">
                    <p>Event</p>
                </a>
            </div>
            <div class="icon">
                <a href="{{ url('/trending') }}">
                    <img src="{{ asset('img/trending.png') }}" alt="Trending">
                    <p>Trending</p>
                </a>
            </div>
            <div class="icon">
                <a href="{{ url('/favorit') }}">
                    <img src="{{ asset('img/love.png') }}" alt="Favorit">
                    <p>Favorit</p>
                </a>
            </div>
            <div class="icon">
                <a href="{{ url('/terdekat') }}">
                    <img src="{{ asset('img/terdekat.png') }}" alt="Terdekat">
                    <p>Terdekat</p>
                </a>
            </div>
        </div>
    </section>

</body>
</html>

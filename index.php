<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page | Y-Gleise 01</title>
    <!-- Main Styles -->
    <link rel="stylesheet" href="/keamori/styles-new.css">
    <link rel="stylesheet" href="/keamori/font-awesome.min.css">
    <!-- Sub Styles -->
    <link rel="stylesheet" href="/keamori/header.css">
    <link rel="stylesheet" href="/keamori/hero.css">
    <link rel="stylesheet" href="/keamori/featured.css">
    <link rel="stylesheet" href="/keamori/responsive.css">
    <link rel="stylesheet" href="/keamori/community.css">
    <link rel="stylesheet" href="/keamori/footer.css">

    <style>
        .hero-bg {
            background-image: url('https://i.pinimg.com/736x/10/e2/e2/10e2e2667d0c92a73408d1127b5be6a8.jpg');
            background-size: cover;
            background-position: center;
        }
        .room-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="container header-content">
            <div class="logo">
                <i class="fas fa-mug-hot"></i>
                <h1>Y-Gleise 01</h1>
            </div>
            <nav class="nav">
                <ul>
                    <li><a href="/keamori">Home</a></li>
                    <li>
                        <a href="/keamori/rooms">Rooms</a>
                        <ul class="submenu">
                            <li><a href="/keamori/rooms#coffee">Anon</a></li>
                            <li><a href="/keamori/rooms#gaming">Yell Industry</a></li>
                            <li><a href="/keamori/rooms#chill">TalkCafe</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="/keamori/profile">Profile</a>
                        <ul class="submenu">
                            <li><a href="/keamori/profile#settings">Settings</a></li>
                            <li><a href="/keamori/profile#friends">Friends</a></li>
                            <li><a href="/keamori/profile#badges">Badges</a></li>
                        </ul>
                    </li>
                    <li><a href="/keamori/login">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero hero-bg">
        <div class="container hero-content">
            <h2>Welcome to Y-Gleise 01</h2>
            <p>Brew connections in our digital coffeehouse!</p>
            <a href="signup.html" class="btn">Get Your Free Coffee</a>
        </div>
    </section>

    <!-- Featured Rooms -->
    <section class="featured">
        <div class="container">
            <h2 class="section-title">Featured Sectors</h2>
            <div class="rooms-grid">
                <!-- Space 1 -->
                <div class="room-card white">
                    <img src="https://images.pexels.com/photos/302899/pexels-photo-302899.jpeg" alt="Coffee Bar" class="room-img">
                    <div class="room-content">
                        <h3 class="room-title">Ascend Academy</h3>
                        <p class="room-desc">Type: Training Center</p>
                        <a href="#" class="room-link indigo">Explore Courses →</a>
                    </div>
                </div>
                
                <!-- Room 2 -->
                <div class="room-card white">
                    <img src="https://images.pexels.com/photos/3165335/pexels-photo-3165335.jpeg" alt="Gaming Lounge" class="room-img">
                    <div class="room-content">
                        <h3 class="room-title">Yttrium Manufacturing Co.</h3>
                        <p class="room-desc">Type: Company</p>
                        <a href="#" class="room-link indigo">View Our Services →</a>
                    </div>
                </div>
                
                <!-- Room 3 -->
                <div class="room-card">
                    <img src="https://images.pexels.com/photos/258154/pexels-photo-258154.jpeg" alt="Chill Zone" class="room-img">
                    <div class="room-content">
                        <h3 class="room-title">TalkCafe</h3>
                        <p class="room-desc">Type: Community</p>
                        <a href="#" class="room-link">Join the Network →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Community Section -->
    <section class="community">
        <div class="container">
            <h2 class="section-title">Our Community</h2>
            <div class="testimonials-grid">
                <div class="testimonial">
                    <div class="user">
                        <img src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg" alt="User" class="user-img">
                        <div>
                            <h4 class="user-name">Alex</h4>
                            <p class="user-meta">Habbo Member since 2020</p>
                        </div>
                    </div>
                    <p class="testimonial-text">"I've made so many friends in Habbo! The rooms are creative and the community is awesome."</p>
                </div>
                <div class="testimonial">
                    <div class="user">
                        <img src="https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg" alt="User" class="user-img">
                        <div>
                            <h4 class="user-name">Sam</h4>
                            <p class="user-meta">Habbo Member since 2019</p>
                        </div>
                    </div>
                    <p class="testimonial-text">"Building my own rooms has been so much fun. I love seeing people enjoy what I've created!"</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div>
                    <h3 class="footer-title">Habbo</h3>
                    <p class="footer-text">The original virtual world where you can create, chat, and play.</p>
                </div>
                <div>
                    <h4 class="footer-title">Explore</h4>
                    <ul class="footer-links">
                        <li><a href="#">Home</a></li>
                        <li><a href="rooms.html">Rooms</a></li>
                        <li><a href="profile.html">Profile</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="footer-title">Help</h4>
                    <ul class="footer-links">
                        <li><a href="#">Support</a></li>
                        <li><a href="#">Safety</a></li>
                        <li><a href="#">Terms</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="footer-title">Connect</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-discord"></i></a>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <p>© 2023 Habbo. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>

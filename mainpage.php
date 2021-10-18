<!DOCTYPE html>
<html>

<head>
    <?php require "./incl/header.php"; ?>
    <title>Zenon Trading</title>
</head>

<body>
    <!-- HEADER -->
    <header id="home">
        <!-- NAVBAR -->
        <nav class="main-navbar">
            <div class="nav-center">
                <div class="nav-header">
                    <p class="nav-logo">Zenon Trading</p>
                    <button type="button" class="nav-toggle" id="nav-toggle" aria-label="nav toggle">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>

                <div class="nav-links" id="navLinks">
                    <a href="#" class="nav-link">Home</a>
                    <a href="#" class="nav-link">About</a>
                    <a href="#services" class="nav-link">Services</a>
                    <a href="#" class="nav-link">FAQ</a>
                    <a href="#" class="nav-link">Support</a>
                </div>
                <div class="nav-icons">
                    <a href="https://www.google.com" class="nav-icon" target="_blank"><i class="fab fa-facebook"></i></a>
                    <a href="https://www.google.com" class="nav-icon" target="_blank"><i class="fab fa-twitter-square"></i></a>
                    <a href="https://www.google.com" class="nav-icon" target="_blank"><i class="fab fa-discord"></i></a>
                    <a href="https://www.google.com" class="nav-icon" target="_blank"><i class="fab fa-github-square"></i></a>
                </div>
            </div>
        </nav>
        <!-- FIRST BOX -->
        <div class="first">
            <div class="first-banner">
                <h1 class="first-title">Welcome To <span class="subWord">Zenon Trading</span></h1>
                <p class="first-text">Trade almost all types of stocks and cryptocurrencies with a chance of winning awesome rewards</p>
                <a href="#" class="btn-white">Start Trading</a>
            </div>
        </div>

    </header>

    <!-- ABOUT STOCKS -->
    <section class="section about-stocks">
        <div class="about-title">
            <h2 class="title">About <span class="subWord">Stocks</span></h2>
        </div>
        <div class="about-content">
            <article class="about-img">
                <img src="./assests/images/about-stocks.jpg" alt="about stocks" class="about-photo">
            </article>
            <article class="about-info">
                <h3 class="about-sub-title">Why Stocks ?</h3>
                <p class="about-paragraph">Stocks can be a valuable part of your investment portfolio.
                    Owning stocks in different companies can help you build your savings, protect your money from inflation and taxes,
                    and maximize income from your investments. It's important to know that there are risks when investing in the stock market.</p>
                <a href="#" class="btn-white">Read More ...</a>
            </article>
        </div>
    </section>

    <!-- ABOUT CRYPTO -->
    <section class="section about-crypto">
        <div class="about-title">
            <h2 class="title">About <span class="subWord">Crypto</span></h2>
        </div>
        <div class="about-content">
            <article class="about-img">
                <img src="./assests/images/about-crypto.jpg" alt="about crypto" class="about-photo">
            </article>
            <article class="about-info">
                <h3 class="about-sub-title">Why Crypto ?</h3>
                <p class="about-paragraph">Digital currencies may also be a long-term investment due to their high market demand.
                    Lower inflation risk. Unlike world currencies — which are regulated by their governments — bitcoin is immune to inflation.
                    The blockchain system is infinite and there's no need to worry about your cryptos losing their value.</p>
                <a href="#" class="btn-white">Read More ...</a>
            </article>
        </div>
    </section>

    <!-- OUR SERVICES -->
    <section class="section our-service" id="services">
        <div class="about-title">
            <h2 class="title">Our <span class="subWord">Services</span></h2>
        </div>
        <div class="service-content">
            <article class="service-info">
                <span class="service-icon"><i class="fas fa-graduation-cap"></i></span>
                <h3 class="about-sub-title">Personalized education just for you</h3>
                <p class="service-text">Learn how to trade with our guides and simple courses and earn money !</p>
                <a href="#" class="btn-white">Read More ...</a>
            </article>
            <article class="service-info">
                <span class="service-icon"><i class="fas fa-plug"></i></span>
                <h3 class="about-sub-title">Day and Night service</h3>
                <p class="service-text">We offer 24/7 service and support, Try our live chat or join our discord server</p>
                <a href="#" class="btn-white">Contact Us</a>
            </article>
            <article class="service-info">
                <span class="service-icon"><i class="fas fa-universal-access"></i></span>
                <h3 class="about-sub-title">All for free !</h3>
                <p class="service-text">Tons of services stocks and cryptos all in your hand for FREE !</p>
                <a href="#" class="btn-white">Read More ...</a>
            </article>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="section main-footer">
        <div class="footer-links" id="footerLinks">
            <a href="#" class="footer-link">Home</a>
            <a href="#" class="footer-link">About</a>
            <a href="#services" class="footer-link">Services</a>
            <a href="#" class="footer-link">FAQ</a>
            <a href="#" class="footer-link">Support</a>
        </div>
        <div class="footer-icons">
            <a href="https://www.google.com" class="footer-icon" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="https://www.google.com" class="footer-icon" target="_blank"><i class="fab fa-twitter-square"></i></a>
            <a href="https://www.google.com" class="footer-icon" target="_blank"><i class="fab fa-discord"></i></a>
            <a href="https://www.google.com" class="footer-icon" target="_blank"><i class="fab fa-github-square"></i></a>
        </div>
        <p class="copyright">
            copyright &copy; Zenon Trading Company <?php echo date("Y");?>. All rights reserved.
        </p>
    </footer>
</body>

<?php require "./incl/footer.php"; ?>

</html>
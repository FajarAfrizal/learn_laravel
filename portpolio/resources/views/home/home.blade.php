<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fajar Muhammad Afrizal</title>

    <link rel="stylesheet" href="{!! asset('assets/css/style.css') !!}">
    <!-- Link Swiper CSS -->
    <link rel="stylesheet" href="{!! asset('assets/css/swiper-bundle.min.css') !!}">

    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <!-- Scroll Top -->
    <a href="#home" class="scroll-top">
        <i class='bx bx-up-arrow-alt' ></i>
    </a>

    <!-- Header -->
    <header>
        <!-- Nav -->
        <div class="nav container">
            <!-- Logo -->
            <a href="#" class="logo">Fajar Muhammad Afrizal</a>
            <!-- Navbar -->
            <ul class="navbar">
                <li><a href="#home" class="nav-link">Home</a></li>
                <li><a href="#about" class="nav-link">About</a></li>
                <li><a href="#services" class="nav-link">Skills</a></li>
                <li><a href="#portfolio" class="nav-link">Portofolio</a></li>
                <li><a href="#contact" class="nav-link">Contact</a></li>
            </ul>
            <!-- Menu Icon -->
            <div class="menu-icon">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </div>
    </header>
    <!-- Home -->
    <section class="home container" id="home">
        <div class="home-content">
            <div class="home-img">
                <img src="{!! asset('assets/img/foto muka.jpeg') !!}"alt="">
            </div>
            <div class="home-text">
                <h3>Hello</h3>
                <h2>I'm <span class="color"></span>Fajar</h2>
                <p>
                    I am a <span class="color">Front-End Web Developer</span>  with a passion for creating beautiful, Learning <span class="color">Cyber Security</span>, 
                    and Learning <span class="color">Back End Developer</span>
                </p>
                <div class="social">
                    <a href="https://www.instagram.com/fajarafrizal_/"><i class='bx bxl-instagram'></i></a>
                    <a href="https://twitter.com/FajarAfrizal__"><i class='bx bxl-twitter'></i></a>
                    <a href="https://www.facebook.com/profile.php?id=100031569450410"><i class='bx bxl-facebook'></i></a>
                </div>
            </div>
        </div>

    </section>
    <!-- About -->
    <section class="about container" id="about">
        <!-- Heading About -->
        <h2 class="heading">About</h2>
        <!-- About Content -->
        <div class="about-content">
            <div class="about-data">
                <span>About Me</span>
                <h2>Web Developer, <br>
                     Cyber Scurity & Web Designer</h2>
                     <a href="#" class="btn" download="">
                        Download Cv
                        <i class='bx bx-download'></i>
                     </a>
            </div>
            <div class="about-text">
                <p>Hello! I am Fajar Muhammad Afrizal. Web Developer, Graphic Designer and Cyber Security</p>
                <p>===================================</p>
            </div>
        </div>
    </section>
    <!-- Services -->
<section class="services container" id="services">
    <!-- Heading -->
      <h2 class="heading">skills</h2>
    <!-- Services Content -->
    <div class="services-content">
        <div class="services-box">
            <i class='bx bx-code-alt'></i>
            <h2>Web Development</h2>
            <h2>Learning</h2>
        </div>
        <div class="services-box">
            <i class='bx bx-lock-open' ></i>
            <h2>Cyber Security</h2>
            <h2>Learning</h2>
        </div>
        <div class="services-box">
            <i class='bx bx-brush' ></i>
            <h2>Web Designing</h2>
            <h2>Learning</h2>
        </div>
    </div>
</section>
    <!-- Portfolio -->
    <section class="portfolio container" id="portfolio">
        <!-- Heading -->
        <h2 class="heading">Portfolio</h2>
        <!-- Content PORT -->
        <div class="portfolio-content">
            <div class="portfolio-box">
                <img src="{!! asset('assets/img/web smk.png') !!}" alt="" class="portfolio-img">
                <!-- Overlay -->
                <div class="portfolio-overlay">
                    <h2>Web School</h2>
                    <a href="https://wikrama-fajarmuhammadafrizal.netlify.app">
                        <i class='bx bx-link-alt'></i>
                    </a>
                </div>
            </div>
            <div class="portfolio-box">
                <img src="{!! asset('assets/img/realnumber.png') !!}" alt="" class="portfolio-img">
                <!-- Overlay -->
                <div class="portfolio-overlay">
                    <h2>Real Number</h2>
                    <a href="https://ril.vercel.app/">
                        <i class='bx bx-link-alt'></i>
                    </a>
                </div>
            </div>
            <div class="portfolio-box">
                <img src="{!! asset('assets/img/K3 E Learning.png') !!}" alt="" class="portfolio-img">
                <!-- Overlay -->
                <div class="portfolio-overlay">
                    <h2>Coming Soon</h2>
                    <a href="#">
                        <i class='bx bx-link-alt'></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Review -->
    <section class="container reviews" id="reviews">
        <!-- Heading -->
        <h2 class="heading">motivation</h2>
        <!-- Review Content -->
        <div class="reviews-content swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <!-- Review Box -->
                    <div class="review-box">
                        <i class='bx bxs-quote-right'></i>
                        <p class="review-text">
                            Resep kehidupan yang sukses adalah menemukan tujuan hidup, 
                            dan kemudian menjalaninya.
                        </p>
                        <div class="review-profile">
                            <h2>Henry Ford</h2>
                            <span>From USA </span>
                            <img src="{!! asset('assets/img/henry ford.jpg') !!}" alt=>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <!-- Review Box -->
                    <div class="review-box">
                        <i class='bx bxs-quote-right'></i>
                        <p class="review-text">
                            Kesempatan memang tak akan datang dua kali, tapi kesempatan
                             akan datang kepada orang yang tidak mau berhenti mencoba.
                        </p>
                        <div class="review-profile">
                            <h2>Dzawin Nur</h2>
                            <span>From Indonesia</span>
                            <img src="{!! asset('assets/img/dzawin.jpg') !!}" alt="">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <!-- Review Box -->
                    <div class="review-box">
                        <i class='bx bxs-quote-right'></i>
                        <p class="review-text">
                            Tak perlu repot-repot menyamakan diri dengan orang lain. 
                            Kau diciptakan untuk menjadi unik. Sudah terlalu
                             banyak orang yang sama seperti kebanyakan orang.
                        </p>
                        <div class="review-profile">
                            <h2>Fiersa Besari</h2>
                            <span>From Indonesia</span>
                            <img src="{!! asset('assets/img/fiersa.jpg') !!}" alt="">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <!-- Review Box -->
                    <div class="review-box">
                        <i class='bx bxs-quote-right'></i>
                        <p class="review-text">
                            Jangan iri dengan pencapaian orang lain yang lebih baik dari kita.
                             Jadikan itu motivasi kenapa orang lain bisa
                             dan kita juga harus bisa dan melakukannya dengan lebih baik.
                        </p>
                        <div class="review-profile">
                            <h2>Anonim</h2>
                            <span>I Dont Know</span>
                            <img src="{!! asset('assets/img/anonim.jpg') !!}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <!-- Contact Form-->
    <section class="contact container" id="contact">
        <!-- heading -->
        <h2 class="heading">Contact</h2>
        <!-- Contact Form -->
        <form action="" class="contact-form" id="contact-form">
            <input type="text" placeholder="Your Name" class="name" required>
            <input type="email" name="" id="" placeholder="Email Address ...." class="email" required>
            <textarea name="" id="" cols="30" rows="10" placeholder="Write message here..." class="message" required></textarea>
            <input type="submit" value="Send" class="send-btn">
        </form>
        <section class="footer container" id="footer">
            <div class="social">
                <a href="mailto:fajarmuhammadafrizal@smkwikrama.sch.id"><i class='bx bx-envelope'></i></a>
                <a href="https://www.facebook.com/profile.php?id=100031569450410"><i class='bx bxl-facebook'></i></a>
                <a href="https://twitter.com/FajarAfrizal__"><i class='bx bxl-twitter'></i></a>
                <a href="https://www.instagram.com/fajarafrizal_/"><i class='bx bxl-instagram'></i></a>
            </div>
            <!-- Footer Links -->
            <div class="footer-links">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms of Use</a>
                <a href="#">Disclaimer</a>
            </div>
            <!-- Copyright -->
            <p>&#169; Fajar Muhammad Afrizal</p>
        </section>
    </section>
    <!-- Email JS Link -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
    <!-- Sweet Alert JS Link-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript">
    (function() {
        emailjs.init("46H9UjIkgknoGaDr7");
    })();
    
    </script>

    <!-- Link Swiper JS -->
    <script src="{!! asset('assets/js/swiper-bundle.min.js') !!}"></script>
    <!-- Link To JS -->
    <script src="{!! asset('assets/js/main.js') !!}"></script>
</body>
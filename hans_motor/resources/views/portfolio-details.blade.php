<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Portfolio Details - Impact Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <style>
    .in-stock {
      color: green;
      font-weight: bold;
    }
    .out-of-stock {
      color: red;
      font-weight: bold;
    }
  </style>

</head>
<body class="portfolio-details-page">

  <header id="header" class="header fixed-top">
    <div class="topbar d-flex align-items-center">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">UNTUNGTERUS@gmail.com</a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>+62 812344552</span></i>
        </div>
        {{-- <div class="social-links d-none d-md-flex align-items-center">
          <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div> --}}
      </div>
    </div><!-- End Top Bar -->

    <div class="branding d-flex align-items-center">
      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="/" class="logo d-flex align-items-center">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <img src="assets/img/Hondalo.png" alt="">
          <h1 class="sitename">Ukuran dan Model Ban</h1>
          <span>.</span>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="/#portfolio">Kembali<br></a></li>
            <li><a href="/about">Ukuran Ban</a></li>
            <li><a href="/services">Model Ban</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav><!-- .navmenu -->

      </div>
    </div>
  </header><!-- End Header -->

  <main class="main">
    <!-- Page Title -->
    <div class="page-title">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Pengubahan Ukuran dan Model Ban</h1>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="/">Home</a></li>
            <li class="current">Pengubahan Ukuran dan Model Ban</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Portfolio Details Section -->
    <section id="portfolio-details" class="portfolio-details section">
      <div class="container" data-aos="fade-up">
        <div class="portfolio-details-slider swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "navigation": {
                "nextEl": ".swiper-button-next",
                "prevEl": ".swiper-button-prev"
              },
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper">
            <div class="swiper-slide" data-category="Ban Bias" data-model="Pajero" data-size="265/60 R 18" data-released="01 Maret, 2024" data-price="Rp 2,000,000" data-manufacturer="PT.UNTUNGTERUS" data-warranty="2 Years" data-availability="In Stock">
              <img src="assets/img/portfolio/app-1.jpg" alt="">
          </div>          
            <div class="swiper-slide" data-category="Ban Radial" data-model="Civic" data-size="205/55 R 16" data-released="10 Maret, 2024" data-price="Rp 3,000,000" data-manufacturer="PT.UNTUNGTERUS" data-warranty="3 Years" data-availability="Out of Stock">
              <img src="assets/img/portfolio/product-1.jpg" alt="">
            </div>
            <div class="swiper-slide" data-category="Ban Tubeless" data-model="Fortuner" data-size="265/65 R17 atau 265/60 R18" data-released="20 Maret, 2024" data-price="Rp 4,000,000" data-manufacturer="PT.UNTUNGTERUS" data-warranty="4 Years" data-availability="In Stock">
              <img src="assets/img/portfolio/branding-1.jpg" alt="">
            </div>
            <div class="swiper-slide" data-category="Ban Tubetype" data-model="Avanza" data-size="85/70 R 15" data-released="30 Maret, 2024" data-price="Rp 1,500,000" data-manufacturer="PT.UNTUNGTERUS" data-warranty="1 Year" data-availability="In Stock">
              <img src="assets/img/portfolio/books-1.jpg" alt="">
            </div>
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
          <div class="swiper-pagination"></div>
        </div>

        <div class="row justify-content-between gy-4 mt-4">
          <div class="col-lg-8" data-aos="fade-up">
            <div class="portfolio-description">
              <h2>Macam - Macam Model Ban</h2>
              <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Ban Bias
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      Jenis ban mobil bias adalah tipe yang paling banyak dipakai. Terbuat dari banyak lembar cord yang digunakan untuk pembungkus benang nilon, yang dibentuk menjadi lapisan yang kuat dan kokoh. Ban bias biasanya digunakan pada kendaraan penumpang atau kendaraan kecil lainnya.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Ban Radial
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      Jenis ban mobil radial ini berbeda dengan bias yang mempunyai susunan serat membujur. Ban radial mempunyai susunan serat yang menyilang dengan sudut 90 derajat terhadap arah perputaran ban. Ban ini lebih kuat dari ban bias dan biasanya digunakan untuk kendaraan yang lebih besar seperti truk atau SUV.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Ban Tubeless
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      Jenis ban mobil tubeless tidak menggunakan ban dalam. Ban ini dirancang agar tidak mudah bocor karena lapisan dalam ban langsung menyatu dengan velg, sehingga tidak ada celah untuk udara keluar. Biasanya digunakan pada kendaraan penumpang modern.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                      Ban Tubetype
                    </button>
                  </h2>
                  <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      Jenis ban mobil tubetype masih menggunakan ban dalam sebagai media penampung udara. Meskipun sudah jarang digunakan pada mobil modern, ban jenis ini masih sering ditemui pada kendaraan niaga seperti truk atau bus.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="portfolio-info">
              <h3>Informasi Ban</h3>
              <ul>
                <li><strong>Kategori</strong> <span id="category"></span></li>
                <li><strong>Model</strong> <span id="model"></span></li>
                <li><strong>Ukuran</strong> <span id="size"></span></li>
                <li><strong>Rilis</strong> <span id="released"></span></li>
                <li><strong>Harga</strong> <span id="price"></span></li>
                <li><strong>Produsen</strong> <span id="manufacturer"></span></li>
                <li><strong>Garansi</strong> <span id="warranty"></span></li>
                <li><strong>Ketersediaan</strong> <span id="availability" class="in-stock"></span></li>
                <li>
                  <button class="btn btn-primary mt-3" id="buy-now-button">Buy Now</button>
                  <span id="buy-condition" class="ms-2 in-stock"></span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Portfolio Details Section -->
  </main><!-- End #main -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

  <script>
   document.addEventListener('DOMContentLoaded', function() {
  const swiper = new Swiper('.portfolio-details-slider', JSON.parse(document.querySelector('.swiper-config').textContent));

  // Handler untuk event listener Buy Now
  const buyNowButton = document.getElementById('buy-now-button');
  buyNowButton.addEventListener('click', buyButtonClickHandler);

  function buyButtonClickHandler() {
    const activeSlide = swiper.slides[swiper.activeIndex];
    const model = activeSlide.getAttribute('data-model');
    const price = activeSlide.getAttribute('data-price');

    alert(`Anda telah membeli ${model} seharga ${price}`);
  }

  swiper.on('slideChange', function() {
    const activeSlide = swiper.slides[swiper.activeIndex];
    const category = activeSlide.getAttribute('data-category');
    const model = activeSlide.getAttribute('data-model');
    const size = activeSlide.getAttribute('data-size');
    const released = activeSlide.getAttribute('data-released');
    const price = activeSlide.getAttribute('data-price');
    const manufacturer = activeSlide.getAttribute('data-manufacturer');
    const warranty = activeSlide.getAttribute('data-warranty');
    const availability = activeSlide.getAttribute('data-availability');

    document.getElementById('category').textContent = category;
    document.getElementById('model').textContent = model;
    document.getElementById('size').textContent = size;
    document.getElementById('released').textContent = released;
    document.getElementById('price').textContent = price;
    document.getElementById('manufacturer').textContent = manufacturer;
    document.getElementById('warranty').textContent = warranty;
    document.getElementById('availability').textContent = availability;

    const availabilityElement = document.getElementById('availability');
    const buyConditionElement = document.getElementById('buy-condition');

    if (availability.toLowerCase() === 'in stock') {
      availabilityElement.classList.add('in-stock');
      availabilityElement.classList.remove('out-of-stock');
      buyConditionElement.textContent = 'Tersedia untuk dibeli';
      buyConditionElement.classList.add('in-stock');
      buyConditionElement.classList.remove('out-of-stock');
      buyNowButton.disabled = false;
    } else {
      availabilityElement.classList.add('out-of-stock');
      availabilityElement.classList.remove('in-stock');
      buyConditionElement.textContent = 'Tidak tersedia untuk dibeli';
      buyConditionElement.classList.add('out-of-stock');
      buyConditionElement.classList.remove('in-stock');
      buyNowButton.disabled = true;
    }
  });
});



  </script>

</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>PT.UNTUNG TERUS</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/Hondalogi.jpg" rel="icon">
  <link href="assets/img/Hondalogo.jpg" rel="Logo">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- Main JavaScript File -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-vtXRMe3mGCbOeY7l30aIg8H9p3GdeSe4IFlP6G8JMa7o7lXvnz3GFKzPxzJdPfGK" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
</head>

<body class="index-page">

  <header id="header" class="header fixed-top">

    <div class="topbar d-flex align-items-center">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">UNTUNGTERUS@gmail.com</a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>+62 812344552</span></i>
        </div>
      </div>
    </div><!-- End Top Bar -->

    <div class="branding d-flex align-items-cente">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="/" class="logo d-flex align-items-center">
          <img src="assets/img/Hondalo.png" alt="">
          <h1 class="sitename">Sparepart Vehicle By Astra</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
              <li><a href="#hero" class="active">Home<br></a></li>
              <li><a href="#portfolio">Shop Sparepart</a></li>
             <li>
                <a href="#cart" class="your-cart-button toggle-cart-button">
                    <i class="fas fa-shopping-cart"></i> Cart (<span id="cart-count">0</span>)
                </a>
            </li>
            </ul>
            <div id="cart-slide-panel" class="cart-slide-panel">
              <button id="close-cart-button" class="close-cart-button">
                  <i class="fas fa-times"></i>
              </button>
              <h2>Shopping Cart</h2>
              <ul id="cart-items"></ul>
              <div class="cart-form">
                <div class="form-group">
                  <label for="user-name">Nama Anda:</label>
                  <input type="text" id="user-name" placeholder="Nama Anda">
                </div>
                <div class="form-group">
                  <label for="user-address">Alamat Anda:</label>
                  <input type="text" id="user-address" placeholder="Alamat Anda">
                </div>
                <div class="form-group">
                  <label for="user-phone">Nomor Handphone Anda:</label>
                  <input type="text" id="user-phone" placeholder="Nomor Handphone Anda">
                </div>
              </div>
              <div class="total-price">Total: Rp. 0</div>
              <div class="cart-action-buttons">
                <button id="checkout-button">Checkout</button>
                <button id="select-all-button">Select All</button>
                <button id="deselect-all-button">Deselect All</button>
                <button id="delete-selected-button">Delete Selected</button>
              </div>
          </div>    
        </nav>      
      </div>
    </div>

  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section accent-background">

      <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-5 justify-content-between">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h2><span>Welcome to </span><span class="accent">PT.UNTUNG TERUS</span></h2>
            <p>Beraneka Ragam Kebutuhan Sparepart Mobil.</p>
            <div class="d-flex"></div>
          </div>
          <div class="col-lg-5 order-1 order-lg-2">
            <img src="assets/img/tips-sukses-bengkel-mobil-1024x576.jpg" class="img-fluid" alt="">
          </div>
        </div>
      </div>

      <div class="icon-boxes position-relative" data-aos="fade-up" data-aos-delay="200">
        <div class="container position-relative">
          <div class="row gy-4 mt-5">

            <div class="col-xl-3 col-md-6">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-car-front-fill"></i></div>
                <h4 class="title"><a href="#portfolio" class="stretched-link">Sparepart Mobil</a></h4>
              </div>
            </div><!--End Icon Box -->

            <div class="col-xl-3 col-md-6">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-info-circle"></i></div>
                <h4 class="title"><a href="" class="stretched-link">Konsultasi Tentang Sparepart</a></h4>
              </div>
            </div><!--End Icon Box -->

          </div>
        </div>
      </div>

    </section><!-- Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Tentang PT.UNTUNG TERUS<br></h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3>Mengapa PT.UNTUNGTERUS Hadir Untuk Mereka Yang Kesulitan Mencari Sparepart Mobil</h3>
            <img src="assets/img/Gusazmi.jpg" class="img-fluid rounded-4 mb-4" alt="">
            <p>Otomotif di Indonesia terus mengalami pertumbuhan yang signifikan seiring dengan meningkatnya jumlah kendaraan mobil yang beroperasi di jalan raya. Pertumbuhan ini menciptakan peluang besar dalam sektor pendukung, terutama dalam penjualan sparepart mobil. Dengan semakin meningkatnya permintaan akan perawatan dan perbaikan kendaraan, pasar sparepart mobil memiliki prospek yang sangat menjanjikan.</p>
            <p>Layanan Penjualan dan Dukungan Spare Part Mobil Online PT Untung Terus adalah platform digital yang menawarkan pembelian spare part mobil secara mudah dan cepat, dengan dukungan teknis dan layanan purna jual yang menyeluruh. Layanan ini mencakup seluruh proses mulai dari pemilihan produk, pengiriman, hingga dukungan setelah penjualan.</p>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                PT Untung Terus merencanakan strategi penjualan berbasis online yang inovatif dan terintegrasi untuk memenuhi kebutuhan pelanggan di seluruh Indonesia dengan menyediakan kemudahan, kecepatan, dan layanan purna jual berkualitas tinggi. Platform e-commerce PT Untung Terus memungkinkan pelanggan menjelajahi banyak produk spare part mobil dengan deskripsi dan gambar yang jelas, serta melakukan pembelian dengan berbagai metode pembayaran yang aman dan mudah. 
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> <span>Barang Original</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>Konsultasi Tentang Services</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>Pelayanannya Terjamin</span></li>
              </ul>

              <div class="position-relative mt-4">
                <img src="assets/img/Bengkel.jpg" class="img-fluid rounded-4" alt="">
                <img src="assets/img/Bengkell.jpg" class="img-fluid rounded-4" alt="">
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

<!-- Portfolio Section -->
<section id="portfolio" class="portfolio section">
  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
      <h2>Barang Kebutuhan Yang Ada Di UNTUNGTERUS</h2>
  </div><!-- End Section Title -->

  <div class="container">
      <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
              <li data-filter="*" class="filter-active">All</li>
              @foreach(\App\Models\Product::CATEGORY_SELECT as $key => $value)
                  <li data-filter=".filter-{{ strtolower($key) }}">{{ $value }}</li>
              @endforeach
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
              @foreach ($products as $product)
                  <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-{{ strtolower($product->category) }}">
                      <div class="portfolio-content h-100">
                          <a href="{{ $product->getFirstMediaUrl('image', 'preview') }}" data-gallery="portfolio-gallery-app" class="glightbox">
                              <img src="{{ $product->getFirstMediaUrl('image', 'preview') }}" class="img-fluid" alt="{{ $product->nama_product }}">
                          </a>
                          <div class="portfolio-info">
                            <h4><a href="/portfolio-details" title="More Details">{{ $product->nama_product }}</a></h4>
                            <p>{{ $product->description }}</p>
                            <span class="price">Rp. {{ number_format($product->price, 0, ',', '.') }}</span>
                            <a href="#" class="btn btn-primary mt-2 add-to-cart">
                                <i class="fas fa-shopping-cart"></i> Add to Cart
                            </a>
                        </div>                   
                      </div>
                  </div>
              @endforeach
          </div>
      </div>
  </div>
</section><!-- Portfolio Section -->
  


    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gx-lg-0 gy-4">

          <div class="col-lg-4">
            <div class="info-container d-flex flex-column align-items-center justify-content-center">
              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3>Address</h3>
                  <p>Jl. Kramat Pela Jakarta, DKI Jakarta 11110</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3>Call Us</h3>
                  <p>+62 812344552</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Email Us</h3>
                  <p>UNTUNGTERUS@gmail.com</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                <i class="bi bi-clock flex-shrink-0"></i>
                <div>
                  <h3>Open Hours:</h3>
                  <p>Mon-Fri: 12AM - 5PM</p>
                </div>
              </div><!-- End Info Item -->

            </div>

          </div>
  </main>

  <footer id="footer" class="footer accent-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-about">
          <a href="/" class="logo d-flex align-items-center">
            <span class="sitename">PT.UNTUNG TERUS</span>
          </a>
          <p>Semua Sparepart Ada Di PT.UNTUNGTERUS</p>
          </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>Jl. Kramat Pela</p>
          <p>Jakarta, DKI Jakarta 11110</p>
          <p>Indonesian</p>
          <p class="mt-4"><strong>Phone:</strong> <span>+62 812 344552</span></p>
          <p><strong>Email:</strong> <span>UNTUNGTERUS@gmail.com</span></p>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">PT.UNTUNG TERUS</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        Designed by <a href="/">PT.UNTUNG TERUS</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="assets/js/main.js"></script>
  <script>
   document.addEventListener('DOMContentLoaded', (event) => {
    let cart = localStorage.getItem('cart') ? JSON.parse(localStorage.getItem('cart')) : [];
    updateCartCount();

    document.querySelectorAll('.add-to-cart').forEach(button => {
        button.addEventListener('click', function(event) {
            event.preventDefault();
            const product = getProductDetails(this);
            if (product) {
                const existingItemIndex = cart.findIndex(item => item.name === product.name && item.description === product.description);
                if (existingItemIndex !== -1) {
                    // Item already exists, update quantity
                    cart[existingItemIndex].quantity += product.quantity;
                } else {
                    // Item does not exist, add to cart
                    cart.push(product);
                }
                localStorage.setItem('cart', JSON.stringify(cart));
                updateCartCount();
                addToCartSlide(product);
                openCart();
            }
        });
    });

    function updateCartCount() {
        document.getElementById('cart-count').textContent = cart.length;
        displayCartItems();
        updateTotalPrice();
    }

    function addToCartSlide(product) {
        console.log(`Item added to cart: ${product.name} - ${product.description} - Rp.${product.price.toLocaleString('id-ID')} - ${product.quantity}`);
    }

    function getProductDetails(button) {
        let portfolioInfo = button.closest('.portfolio-content');
        if (portfolioInfo) {
            let name = portfolioInfo.querySelector('h4 a').innerText;
            let description = portfolioInfo.querySelector('p').innerText;
            let imageUrl = portfolioInfo.querySelector('img').src;
            let priceElement = portfolioInfo.querySelector('.price');
            let price = priceElement ? parseInt(priceElement.innerText.replace('Rp. ', '').replace(/\./g, '')) : 0;
            let quantityElement = portfolioInfo.querySelector('.quantity');
            let quantity = quantityElement ? parseInt(quantityElement.value) : 1;
            return { name, description, imageUrl, price, quantity };
        }
        return null;
    }

    function updateTotalPrice() {
        const totalPriceElement = document.querySelector('.total-price');
        const total = cart.reduce((acc, item) => acc + (item.price * item.quantity), 0);
        totalPriceElement.textContent = `Dengan Total Harga: Rp. ${total.toLocaleString('id-ID')}`;
    }

    function displayCartItems() {
        const cartItemsContainer = document.getElementById('cart-items');
        cartItemsContainer.innerHTML = '';

        const table = document.createElement('table');
        table.className = 'cart-table';

        const thead = document.createElement('thead');
        const headerRow = document.createElement('tr');

        const headers = ['Image', 'Name', 'Description', 'Price', 'Quantity'];
        headers.forEach(headerText => {
            const th = document.createElement('th');
            th.textContent = headerText;
            headerRow.appendChild(th);
        });

        thead.appendChild(headerRow);
        table.appendChild(thead);

        const tbody = document.createElement('tbody');

        cart.forEach((item, index) => {
            const row = document.createElement('tr');
            row.addEventListener('click', () => toggleSelection(row));

            const imgCell = document.createElement('td');
            const img = document.createElement('img');
            img.src = item.imageUrl;
            img.style.width = '50px';
            imgCell.appendChild(img);
            row.appendChild(imgCell);

            const nameCell = document.createElement('td');
            nameCell.textContent = item.name;
            row.appendChild(nameCell);

            const descriptionCell = document.createElement('td');
            descriptionCell.textContent = item.description;
            row.appendChild(descriptionCell);

            const priceCell = document.createElement('td');
            priceCell.textContent = `Rp. ${item.price.toLocaleString('id-ID')}`;
            row.appendChild(priceCell);

            const quantityCell = document.createElement('td');
            const quantityInput = document.createElement('input');
            quantityInput.type = 'number';
            quantityInput.className = 'quantity';
            quantityInput.name = 'Quantity';
            quantityInput.value = item.quantity;
            quantityInput.addEventListener('change', function() {
                updateQuantity(index, parseInt(quantityInput.value));
            });
            quantityCell.appendChild(quantityInput);
            row.appendChild(quantityCell);

            tbody.appendChild(row);
        });

        table.appendChild(tbody);
        cartItemsContainer.appendChild(table);
    }

    function updateQuantity(index, newQuantity) {
        if (newQuantity > 0) {
            cart[index].quantity = newQuantity;
        } else {
            cart.splice(index, 1);
        }
        localStorage.setItem('cart', JSON.stringify(cart));
        updateCartCount();
    }

    function toggleSelection(row) {
        row.classList.toggle('selected');
    }

    function deleteSelectedItems() {
        const selectedRows = document.querySelectorAll('.cart-table tbody tr.selected');
        const selectedIndexes = Array.from(selectedRows).map(row => Array.from(row.parentNode.children).indexOf(row));
        cart = cart.filter((_, index) => !selectedIndexes.includes(index));

        localStorage.setItem('cart', JSON.stringify(cart));
        updateCartCount();
    }

    function selectAllItems() {
        const rows = document.querySelectorAll('.cart-table tbody tr');
        rows.forEach(row => {
            row.classList.add('selected');
        });
    }

    function deselectAllItems() {
        const rows = document.querySelectorAll('.cart-table tbody tr');
        rows.forEach(row => {
            row.classList.remove('selected');
        });
    }

    const checkoutButton = document.getElementById('checkout-button');
    if (checkoutButton) {
        checkoutButton.addEventListener('click', checkout);
    }

    const selectAllButton = document.getElementById('select-all-button');
    if (selectAllButton) {
        selectAllButton.addEventListener('click', selectAllItems);
    }

    const deselectAllButton = document.getElementById('deselect-all-button');
    if (deselectAllButton) {
        deselectAllButton.addEventListener('click', deselectAllItems);
    }

    const deleteSelectedButton = document.getElementById('delete-selected-button');
    if (deleteSelectedButton) {
        deleteSelectedButton.addEventListener('click', deleteSelectedItems);
    }

    function checkout() {
    let cart = localStorage.getItem('cart') ? JSON.parse(localStorage.getItem('cart')) : [];
    console.log('Cart items:', cart);

    const selectedRows = document.querySelectorAll('.cart-table tbody tr.selected');
    if (cart.length === 0 || selectedRows.length === 0) {
        alert('Harap pilih setidaknya satu item untuk melanjutkan checkout.');
        return;
    }

    // Get user details from form
    const userName = document.getElementById('user-name').value;
    const userAddress = document.getElementById('user-address').value;
    const userPhone = document.getElementById('user-phone').value;

    if (!userName || !userAddress || !userPhone) {
        alert('Nama, alamat, dan nomor handphone harus diisi!');
        return;
    }

    if (confirm('Apakah Anda yakin ingin melanjutkan ke checkout?')) {
        const days = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
        const now = new Date();
        const dayName = days[now.getDay()];
        let orderDate = `${dayName}, ${now.toLocaleDateString('id-ID')}`;

        let message = `Halo Admin UNTUNGTERUS, saya ingin memesan Barang ini di tanggal : ${orderDate}.\nBerikut Daftar Pesanannya:\n\n`;
        message += `- Nama: ${userName}\n- Alamat: ${userAddress}\n- Nomor Handphone: ${userPhone}\n\n`;

        let total = 0;
        selectedRows.forEach(row => {
            let index = Array.from(row.parentNode.children).indexOf(row);
            let item = cart[index];
            if (item) {
                let itemTotal = item.price * item.quantity;
                total += itemTotal;
                message += `- Nama Barang: ${item.name}\n  - Deskripsi Barang: ${item.description}\n  - Qty: ${item.quantity}\n  - Harga: Rp. ${itemTotal.toLocaleString('id-ID')}\n\n`;
            } else {
                console.log('Item not found in cart:', index);
            }
        });

        message += `Dengan Total Harga: Rp. ${total.toLocaleString('id-ID')}`;

        const phone = '089652622425';
        const whatsappUrl = `https://wa.me/+6289652622425?text=${encodeURIComponent(message)}`;
        window.open(whatsappUrl, '_blank');
    }
  }

    const closeCartButton = document.getElementById('close-cart-button');
    if (closeCartButton) {
        closeCartButton.addEventListener('click', closeCart);
    }

    function closeCart() {
        const cartContainer = document.getElementById('cart-slide-panel');
        if (cartContainer && cartContainer.classList.contains('show')) {
            cartContainer.classList.remove('show');
        }
    }

    document.querySelectorAll('.toggle-cart-button').forEach(button => {
        button.addEventListener('click', toggleCart);
    });

    function toggleCart() {
        const cartContainer = document.getElementById('cart-slide-panel');
        if (cartContainer) {
            cartContainer.classList.toggle('show');
        } else {
            console.log('Cart container not found');
        }
    }

    document.querySelectorAll('.add-to-wishlist').forEach(button => {
        button.addEventListener('click', function(event) {
            event.preventDefault();
            alert('Item added to wishlist!');
        });
    });
});

</script>
    

</script>
    
</body>

</html>
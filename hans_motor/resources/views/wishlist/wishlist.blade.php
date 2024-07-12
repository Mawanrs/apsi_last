<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Wishlist</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    .added-items {
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <div class="container mt-4">
    <h2>My Wishlist</h2>
    <ul class="list-group mt-3" id="wishlist">
      <li class="list-group-item d-flex justify-content-between align-items-center">
        Item 1
        <button class="btn btn-primary add-to-cart">Add to Cart</button>
      </li>
      <li class="list-group-item d-flex justify-content-between align-items-center">
        Item 2
        <button class="btn btn-primary add-to-cart">Add to Cart</button>
      </li>
      <li class="list-group-item d-flex justify-content-between align-items-center">
        Item 3
        <button class="btn btn-primary add-to-cart">Add to Cart</button>
      </li>
      <li class="list-group-item d-flex justify-content-between align-items-center">
        Item 4
        <button class="btn btn-primary add-to-cart">Add to Cart</button>
      </li>
      <li class="list-group-item d-flex justify-content-between align-items-center">
        Item 5
        <button class="btn btn-primary add-to-cart">Add to Cart</button>
      </li>
    </ul>
  </div>

  <div class="container mt-4">
    <h2>Added Items</h2>
    <ul class="list-group added-items" id="addedItems">
    </ul>
  </div>

  <!-- Bootstrap JS and dependencies (jQuery, Popper.js) -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script>
    document.addEventListener('DOMContentLoaded', (event) => {
        // Inisialisasi arrays untuk menyimpan item di cart dan wishlist
        let cartItems = [];
        let wishlistItems = [];

        // Event listener untuk tombol Add to Cart
        document.querySelectorAll('.btn.btn-primary').forEach(button => {
            button.addEventListener('click', function(event) {
                event.preventDefault();
                addToCartSlide(this); // Panggil fungsi untuk menambah item ke keranjang
                Swal.fire({
                    title: 'Item telah ditambahkan ke keranjang belanja!',
                    icon: 'success',
                    confirmButtonText: 'OK',
                    timer: 3000 // Timer untuk otomatis redirect setelah 3 detik
                }).then(() => {
                    window.location.href = '/cart'; // Redirect ke halaman keranjang belanja
                });
            });
        });

        // Event listener untuk tombol Add to Wishlist di halaman index
        document.querySelectorAll('.btn.btn-warning.add-to-wishlist').forEach(button => {
            button.addEventListener('click', function(event) {
                event.preventDefault();
                addToWishlist(this); // Panggil fungsi untuk menambah item ke wishlist
            });
        });

        // Fungsi untuk menambahkan ke Wishlist dengan SweetAlert
        function addToWishlist(button) {
            let portfolioInfo = button.closest('.list-group-item');
            if (portfolioInfo) {
                let itemName = portfolioInfo.querySelector('.item-name').innerText;
                let itemDescription = portfolioInfo.querySelector('.item-description').innerText;

                // Simulasi Ajax untuk menambah item ke wishlist (penggantian ini dengan Ajax yang sesungguhnya)
                wishlistItems.push({ name: itemName, description: itemDescription });

                // Perbarui sidebar wishlist
                updateWishlistSidebar();

                // SweetAlert untuk konfirmasi
                Swal.fire({
                    title: 'Item telah ditambahkan ke wishlist!',
                    icon: 'success',
                    confirmButtonText: 'OK'
                }).then(() => {
                    window.location.href = '/wishlist'; // Redirect ke halaman wishlist setelah konfirmasi
                });
            }
        }

        // Fungsi untuk menghapus item dari wishlist dengan SweetAlert
        function removeFromWishlist(itemName) {
            wishlistItems = wishlistItems.filter(item => item.name !== itemName);
            updateWishlistSidebar(); // Perbarui tampilan sidebar setelah menghapus item

            // SweetAlert untuk konfirmasi
            Swal.fire({
                title: 'Item telah dihapus dari wishlist!',
                icon: 'success',
                confirmButtonText: 'OK'
            });
        }

        // Fungsi untuk memperbarui tampilan sidebar wishlist
        function updateWishlistSidebar() {
            let sidebar = document.getElementById('wishlistSidebar');
            if (!sidebar) {
                sidebar = document.createElement('div');
                sidebar.id = 'wishlistSidebar';
                sidebar.classList.add('sidebar-content');
                sidebar.innerHTML = `
                    <h2>Wishlist</h2>
                    <div id="wishlistItems"></div>
                    <button class="close-button" onclick="hideWishlistSidebar()">Tutup</button>
                `;
                document.body.appendChild(sidebar);
            }

            // Kosongkan daftar item wishlist sebelum memperbarui
            let wishlistContainer = document.getElementById('wishlistItems');
            wishlistContainer.innerHTML = '';

            // Tambahkan item-item dari wishlistItems ke dalam sidebar
            wishlistItems.forEach(item => {
                let itemElement = document.createElement('div');
                itemElement.classList.add('wishlist-item');
                itemElement.innerHTML = `
                    <p>${item.name}</p>
                    <p>${item.description}</p>
                    <button class="remove-from-wishlist" onclick="removeFromWishlist('${item.name}')">Remove</button>
                `;
                wishlistContainer.appendChild(itemElement);
            });

            // Tampilkan sidebar dengan animasi
            sidebar.classList.add('show');
        }

        // Fungsi untuk menyembunyikan sidebar wishlist
        function hideWishlistSidebar() {
            let sidebar = document.getElementById('wishlistSidebar');
            sidebar.classList.remove('show');
            setTimeout(() => {
                document.body.removeChild(sidebar);
            }, 300); // Sesuaikan dengan durasi animasi CSS (0.3 detik)
        }
    });
</script>

</body>
</html>

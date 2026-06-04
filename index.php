<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<div class="hero text-center" style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('images/hero.webp'); background-size: cover; background-position: center;">
    <div class="container">
        <h1 class="display-3 fw-bold">Pizza Keluarga Paling Ceria!</h1>
        <p class="lead fs-3">Rasakan kelezatan pizza spesial dengan teman-teman animatronic kami.</p>
        <a href="detail.php" class="btn btn-retro btn-lg mt-3"><i class="fas fa-utensils"></i> Lihat Menu</a>
    </div>
</div>

<!-- Item Produk (3 pizza dengan modal) -->
<h2 class="text-center mb-4 text-white"><i class="fas fa-star text-warning"></i> Menu Favorit <i class="fas fa-star text-warning"></i></h2>
<div class="row">
    <!-- Pizza Freddy -->
    <div class="col-md-4 mb-4">
        <div class="card h-100 bg-dark text-white">
            <img src="images/fredbear-pizza.jpg" class="card-img-top" alt="Pizza Freddy">
            <div class="card-body text-center">
                <h5 class="card-title">🍕 Freddy's PizzaBox</h5>
                <p class="card-text">Pepperoni, sosis, jamur, dan keju mozzarella melimpah.</p>
                <button class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modalFreddy">Detail</button>
            </div>
        </div>
    </div>
    <!-- Pizza Chica -->
    <div class="col-md-4 mb-4">
        <div class="card h-100 bg-dark text-white">
            <img src="images/pizza-cookie.jpg" class="card-img-top" alt="Pizza Cookie">
            <div class="card-body text-center">
                <h5 class="card-title">🍪 Cookie pizza</h5>
                <p class="card-text">Daging ayam panggang, jagung, saus BBQ, dan keju.</p>
                <button class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modalChica">Detail</button>
            </div>
        </div>
    </div>
    <!-- Pizza Bonnie -->
    <div class="col-md-4 mb-4">
        <div class="card h-100 bg-dark text-white">
            <img src="images/fazbear.jpg" class="card-img-top" alt="Pizza fazbear">
            <div class="card-body text-center">
                <h5 class="card-title">🍕 Fazbear's Special</h5>
                <p class="card-text">Paprika, zaitun, tomat ceri, dan basil segar.</p>
                <button class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modalBonnie">Detail</button>
            </div>
        </div>
    </div>
</div>

<!-- Testimoni -->
<h2 class="text-center mb-4 text-white">💬 Apa Kata Pelanggan?</h2>
<div class="row">
    <div class="col-md-6">
        <div class="testimoni-card">
            <i class="fas fa-quote-left me-2"></i> Pizza-nya enak banget, anak-anak suka karena ada karakter lucu di toppingnya. Suasana restorannya juga asyik!
            <br><strong>- Keluarga Budi</strong>
        </div>
    </div>
    <div class="col-md-6">
        <div class="testimoni-card">
            <i class="fas fa-quote-left me-2"></i> Pilihan menu banyak, harga UMKM bersahabat. Pizza Freddy menjadi favorit saya.
            <br><strong>- Maya, Bandung</strong>
        </div>
    </div>
</div>

<!-- Call to Action (CTA) -->
<div class="text-center bg-warning p-4 rounded my-4" style="background-color: #F7C35C !important;">
    <h3><i class="fas fa-gift"></i> Promo Spesial Akhir Pekan!</h3>
    <p>Beli 1 pizza ukuran besar gratis 1 soft drink. Ayo daftar jadi member!</p>
    <a href="register.php" class="btn btn-dark btn-lg">Daftar Sekarang</a>
</div>

<!-- Modal Bootstrap untuk setiap pizza -->
<!-- Modal Freddy -->
<div class="modal fade" id="modalFreddy" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title">Pizza Freddy's Special</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <img src="images/pizza.jpg" class="img-fluid mb-3 rounded">
                <p><strong>Harga:</strong> Rp55.000 (Medium) / Rp85.000 (Large)</p>
                <p><strong>Topping:</strong> Pepperoni, sosis sapi, jamur, keju mozzarella, saus tomat rahasia.</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal Chica -->
<div class="modal fade" id="modalChica" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title">Pizza Chica Chicken</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <img src="images/pizza-cookie.jpg" class="img-fluid mb-3 rounded">
                <p><strong>Harga:</strong> Rp50.000 (Medium) / Rp80.000 (Large)</p>
                <p><strong>Topping:</strong> Daging ayam panggang, jagung manis, saus BBQ, bawang bombay.</p>
            </div>
            <div class="modal-footer"><button class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button></div>
        </div>
    </div>
</div>
<!-- Modal Bonnie -->
<div class="modal fade" id="modalBonnie" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title">Pizza Bonnie Veggie</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <img src="images/fazbear.jpg" class="img-fluid mb-3 rounded">
                <p><strong>Harga:</strong> Rp48.000 (Medium) / Rp75.000 (Large)</p>
                <p><strong>Topping:</strong> Paprika merah & hijau, zaitun hitam, tomat ceri, daun basil.</p>
            </div>
            <div class="modal-footer"><button class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button></div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<div class="hero text-center">
    <div class="container">
        <h1 class="display-4 fw-bold">Pizza Homestyle Lezat & Terjangkau</h1>
        <p class="lead">Dibuat dengan cinta dari bahan alami UMKM lokal. Pesan sekarang dan rasakan kelezatannya!</p>
        <a href="detail.php" class="btn btn-danger btn-lg">Lihat Menu</a>
    </div>
</div>

<!-- Item Produk (3 card menggunakan Bootstrap Grid) -->
<h2 class="text-center mb-4">🍕 Menu Andalan Kami</h2>
<div class="row">
    <div class="col-md-4 mb-4">
        <div class="card h-100">
            <img src="images/pizza1.jpg" class="card-img-top" alt="Pizza Margherita">
            <div class="card-body">
                <h5 class="card-title">Margherita</h5>
                <p class="card-text">Mozzarella, tomat segar, basil, minyak zaitun.</p>
                <button class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modalPizza1">Detail</button>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card h-100">
            <img src="images/pizza2.jpg" class="card-img-top" alt="Pepperoni">
            <div class="card-body">
                <h5 class="card-title">Pepperoni</h5>
                <p class="card-text">Pepperoni melimpah, keju mozzarella, saus tomat.</p>
                <button class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modalPizza2">Detail</button>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card h-100">
            <img src="images/pizza3.jpg" class="card-img-top" alt="Veggie Lovers">
            <div class="card-body">
                <h5 class="card-title">Veggie Lovers</h5>
                <p class="card-text">Paprika, jamur, jagung, zaitun, dan keju.</p>
                <button class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modalPizza3">Detail</button>
            </div>
        </div>
    </div>
</div>

<!-- Testimoni -->
<h2 class="text-center mb-4">⭐ Testimoni Pelanggan</h2>
<div class="row">
    <div class="col-md-6">
        <div class="testimoni-card">
            <p>"Pizza-nya enak banget, adonan tipis renyah, topping melimpah. Fast response juga!"</p>
            <strong>- Andi, Jakarta</strong>
        </div>
    </div>
    <div class="col-md-6">
        <div class="testimoni-card">
            <p>"Harga bersahabat, rasa premium. Saya jadi langganan tiap minggu."</p>
            <strong>- Siti, Bandung</strong>
        </div>
    </div>
</div>

<!-- Call to Action (CTA) -->
<div class="text-center bg-danger text-white p-5 rounded my-4">
    <h3>Pizza hangat siap antar ke rumahmu!</h3>
    <p>Promo gratis topping untuk pembelian pertama.</p>
    <a href="register.php" class="btn btn-light btn-lg">Daftar Sekarang</a>
</div>

<!-- Modal Bootstrap (Komponen wajib) -->
<div class="modal fade" id="modalPizza1" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Pizza Margherita</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <img src="images/pizza1.jpg" class="img-fluid mb-2" alt="Margherita">
                <p>Harga: Rp45.000 | Ukuran Medium<br>Bahan organik, tanpa pengawet.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal untuk pizza 2 & 3 (sederhana, bisa duplikat atau buat 1 modal dinamis dengan JS, tapi aman ditulis manual) -->
<div class="modal fade" id="modalPizza2" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Pizza Pepperoni</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <img src="images/pizza2.jpg" class="img-fluid mb-2"><br>Harga: Rp55.000 | Ukuran Medium
            </div>
            <div class="modal-footer"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button></div>
        </div>
    </div>
</div>
<div class="modal fade" id="modalPizza3" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Veggie Lovers</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <img src="images/pizza3.jpg" class="img-fluid mb-2"><br>Harga: Rp50.000 | Ukuran Medium
            </div>
            <div class="modal-footer"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button></div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
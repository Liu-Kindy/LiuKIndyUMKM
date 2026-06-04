<?php include 'includes/header.php'; ?>
<h2 class="mb-4 text-center text-white">🍴 Menu Andalan Kami</h2>
<div class="row">
    <div class="col-md-5">
        <img src="images/fazbear.jpg" class="img-fluid rounded shadow" alt="Detail Pizza">
    </div>
    <div class="col-md-7 text-white">
        <h3>Pizza Freddy's Special</h3>
        <p class="lead">Perpaduan sempurna antara daging pepperoni dan sosis dengan saus tomat spesial resep turun temurun.</p>
        <ul class="list-unstyled">
            <li><i class="fas fa-check-circle text-success"></i> Ukuran: Regular (30cm) & Jumbo (40cm)</li>
            <li><i class="fas fa-check-circle text-success"></i> Harga: Rp55.000 - Rp85.000</li>
            <li><i class="fas fa-check-circle text-success"></i> Extra topping: Keju tambahan (+Rp10k), Jamur (+Rp8k)</li>
        </ul>
        <button class="btn btn-retro" data-bs-toggle="modal" data-bs-target="#orderModal"><i class="fas fa-shopping-cart"></i> Pesan Sekarang</button>
    </div>
</div>

<!-- Modal pemesanan -->
<div class="modal fade" id="orderModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Konfirmasi Pesanan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p>Terima kasih! Silakan login atau daftar terlebih dahulu untuk melanjutkan pesanan.</p>
            </div>
            <div class="modal-footer">
                <a href="login.php" class="btn btn-primary">Login</a>
                <a href="register.php" class="btn btn-secondary">Daftar</a>
            </div>
        </div>
    </div>
</div>
<?php include 'includes/footer.php'; ?>
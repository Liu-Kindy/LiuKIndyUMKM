<?php include 'includes/header.php'; ?>

<h2 class="mb-3">Form Registrasi Pelanggan</h2>
<div class="row">
    <div class="col-md-5">
        <form id="registerForm">
            <div class="mb-3">
                <label>Nama Lengkap</label>
                <input type="text" id="nama" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" id="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>No. HP</label>
                <input type="text" id="hp" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Daftar</button>
        </form>
    </div>
    <div class="col-md-7">
        <h4>Daftar User Terdaftar</h4>
        <div class="table-responsive">
            <table class="table table-bordered table-striped" id="userTable">
                <thead>
                    <tr><th>Nama</th><th>Email</th><th>No. HP</th></tr>
                </thead>
                <tbody>
                    <!-- Data akan ditambahkan via JS -->
                    <tr><td colspan="3" class="text-center">Belum ada data</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal informasi setelah register (wajib modal) -->
<div class="modal fade" id="registerModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Registrasi Berhasil</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                Selamat! Anda telah terdaftar di Pizzaria UMKM.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<script>
// DOM Manipulation: menangkap input dari form register dan memasukkannya ke tabel
document.getElementById('registerForm').addEventListener('submit', function(e) {
    e.preventDefault(); // Mencegah reload halaman

    let nama = document.getElementById('nama').value;
    let email = document.getElementById('email').value;
    let hp = document.getElementById('hp').value;

    if (nama === "" || email === "" || hp === "") {
        alert("Semua field harus diisi!");
        return;
    }

    // Ambil tbody tabel
    let tbody = document.querySelector('#userTable tbody');
    // Hapus pesan "Belum ada data" jika ada
    if (tbody.children.length === 1 && tbody.children[0].innerText.includes("Belum ada data")) {
        tbody.innerHTML = "";
    }

    // Buat baris baru
    let newRow = tbody.insertRow();
    let cell1 = newRow.insertCell(0);
    let cell2 = newRow.insertCell(1);
    let cell3 = newRow.insertCell(2);
    cell1.innerText = nama;
    cell2.innerText = email;
    cell3.innerText = hp;

    // Reset form
    document.getElementById('registerForm').reset();

    // Tampilkan modal Bootstrap
    var myModal = new bootstrap.Modal(document.getElementById('registerModal'));
    myModal.show();
});
</script>

<?php include 'includes/footer.php'; ?>
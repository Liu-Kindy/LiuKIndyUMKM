<?php include 'includes/header.php'; ?>

<h2 class="mb-3 text-white"><i class="fas fa-user-plus"></i> Daftar Menjadi Member</h2>
<div class="row">
    <div class="col-md-5">
        <div class="card p-3 bg-dark text-white shadow">
            <form id="registerForm">
                <div class="mb-3">
                    <label>Nama Lengkap</label>
                    <input type="text" id="regName" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" id="regEmail" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Username</label>
                    <input type="text" id="regUsername" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Password</label>
                    <input type="password" id="regPassword" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-retro w-100"><i class="fas fa-save"></i> Daftar</button>
            </form>
        </div>
    </div>
    <div class="col-md-7 text-white">
        <h4>📋 Daftar Member Terdaftar</h4>
        <div class="table-responsive">
            <table class="table table-bordered table-custom" id="userTable">
                <thead class="table-dark">
                    <tr><th>Nama</th><th>Email</th><th>Username</th></tr>
                </thead>
                <tbody id="userTableBody">
                    <tr><td colspan="3" class="text-center">Belum ada member</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal sukses registrasi -->
<div class="modal fade" id="successModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title">Registrasi Berhasil!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                Selamat, akun Anda telah terdaftar. Silakan login.
            </div>
            <div class="modal-footer">
                <a href="login.php" class="btn btn-primary">Login Sekarang</a>
            </div>
        </div>
    </div>
</div>

<script>
// Load data user dari localStorage saat halaman dimuat
function loadUsersToTable() {
    let users = JSON.parse(localStorage.getItem('pizzariaUsers')) || [];
    let tbody = document.getElementById('userTableBody');
    if (users.length === 0) {
        tbody.innerHTML = '<tr><td colspan="3" class="text-center">Belum ada member</td></tr>';
        return;
    }
    let html = '';
    users.forEach(user => {
        html += `<tr>
                    <td>${user.name}</td>
                    <td>${user.email}</td>
                    <td>${user.username}</td>
                 </tr>`;
    });
    tbody.innerHTML = html;
}

// Registrasi
document.getElementById('registerForm').addEventListener('submit', function(e) {
    e.preventDefault();
    let name = document.getElementById('regName').value.trim();
    let email = document.getElementById('regEmail').value.trim();
    let username = document.getElementById('regUsername').value.trim();
    let password = document.getElementById('regPassword').value.trim();

    if (!name || !email || !username || !password) {
        alert("Semua field harus diisi!");
        return;
    }

    let users = JSON.parse(localStorage.getItem('pizzariaUsers')) || [];
    // Cek username duplikat
    if (users.find(u => u.username === username)) {
        alert("Username sudah terdaftar, gunakan yang lain.");
        return;
    }

    users.push({ name, email, username, password });
    localStorage.setItem('pizzariaUsers', JSON.stringify(users));
    loadUsersToTable();
    document.getElementById('registerForm').reset();

    // Tampilkan modal sukses
    var myModal = new bootstrap.Modal(document.getElementById('successModal'));
    myModal.show();
});

// Panggil load saat halaman siap
loadUsersToTable();
</script>

<?php include 'includes/footer.php'; ?>
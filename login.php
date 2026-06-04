<?php include 'includes/header.php'; ?>

<div class="row justify-content-center mt-5">
    <div class="col-md-5">
        <div class="card shadow bg-dark text-white">
            <div class="card-header bg-danger text-white text-center">
                <h4><i class="fas fa-sign-in-alt"></i> Login Member</h4>
            </div>
            <div class="card-body">
                <div id="loginAlert" class="alert alert-danger d-none"></div>
                <form id="loginForm">
                    <div class="mb-3">
                        <label>Username</label>
                        <input type="text" id="loginUsername" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Password</label>
                        <input type="password" id="loginPassword" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-retro w-100">Login</button>
                </form>
                <p class="mt-3 text-center">Belum punya akun? <a href="register.php">Daftar di sini</a></p>
            </div>
        </div>
    </div>
</div>

<!-- Modal Login Sukses -->
<div class="modal fade" id="loginSuccessModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title">Login Berhasil</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                Selamat datang kembali! Anda akan diarahkan ke halaman utama.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<script>
document.getElementById('loginForm').addEventListener('submit', function(e) {
    e.preventDefault();
    let username = document.getElementById('loginUsername').value.trim();
    let password = document.getElementById('loginPassword').value.trim();
    let users = JSON.parse(localStorage.getItem('pizzariaUsers')) || [];
    let foundUser = users.find(u => u.username === username && u.password === password);

    if (foundUser) {
        // Simpan status login ke sessionStorage (opsional)
        sessionStorage.setItem('loggedInUser', username);
        // Tampilkan modal sukses
        var myModal = new bootstrap.Modal(document.getElementById('loginSuccessModal'));
        myModal.show();
        // Redirect setelah modal ditutup
        document.getElementById('loginSuccessModal').addEventListener('hidden.bs.modal', function () {
            window.location.href = 'index.php';
        });
    } else {
        let alertDiv = document.getElementById('loginAlert');
        alertDiv.innerText = "Username atau password salah! Silakan coba lagi.";
        alertDiv.classList.remove('d-none');
    }
});
</script>

<?php include 'includes/footer.php'; ?>
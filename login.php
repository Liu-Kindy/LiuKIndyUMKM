<?php include 'includes/header.php'; 
// Hardcoded username & password statis
$valid_username = "pizzaria";
$valid_password = "umkm2026";
$login_error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    if ($username === $valid_username && $password === $valid_password) {
        // Sukses: bisa set session atau redirect, di sini sederhana tampilkan pesan sukses
        $login_success = true;
    } else {
        $login_error = "Username atau password salah!";
    }
}
?>
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-danger text-white">Login Pizzaria UMKM</div>
            <div class="card-body">
                <?php if (isset($login_success)): ?>
                    <div class="alert alert-success">Login berhasil! Selamat datang, <?= htmlspecialchars($_POST['username']) ?>.</div>
                <?php endif; ?>
                <?php if ($login_error): ?>
                    <div class="alert alert-danger"><?= $login_error ?></div>
                <?php endif; ?>
                <form method="POST" action="">
                    <div class="mb-3">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" required>
                        <small class="text-muted">Gunakan: pizzaria</small>
                    </div>
                    <div class="mb-3">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                        <small class="text-muted">Gunakan: umkm2026</small>
                    </div>
                    <button type="submit" class="btn btn-danger w-100">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include 'includes/footer.php'; ?>
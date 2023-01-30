<nav class="navbar navbar-dark navbar-expand-lg bg-primary fixed-top shadow">
    <div class="container">
        <a class="navbar-brand" href="#">Admin Perpustakaan</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pengajuan Pinjam Buku</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Pengajuan Pinjam Buku
                    </a>
                    <ul class="dropdown-menu">
                        <a class="dropdown-item" href="form-pendaftaran.php">Input Pengguna</a>
                        <a class="dropdown-item" href="form-buku.php">Input Buku</a>
                        <a class="dropdown-item" href="data-perpustakaan.php">Data Perpustakaan</a>
                    </ul>
                </li>
                <li class="ms-2 me-2">
                    <button class="btn btn-light" ">login</button>
                </li>
                <li>
                    <button class=" btn btn-primary" id="butonku"><i class="bi bi-cloud-moon-fill"></i>
                </li>
            </ul>
        </div>
    </div>
</nav>
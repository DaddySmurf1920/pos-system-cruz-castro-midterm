<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4 shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="<?= base_url('/') ?>">🛒 POS System</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="<?= base_url('/') ?>">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('/customers') ?>">Customers</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('/products') ?>">Products</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('/sales') ?>">Sales</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('/about') ?>">About</a></li>
            </ul>
        </div>
    </div>
</nav>
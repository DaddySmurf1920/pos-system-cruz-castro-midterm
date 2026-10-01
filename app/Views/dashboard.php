<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS System - Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <?= view('nav') ?>

    <div class="container py-5">
        <div class="p-5 mb-4 bg-white rounded-3 shadow-sm border">
            <div class="container-fluid py-3">
                <h1 class="display-5 fw-bold text-dark">🛒 POS System Dashboard</h1>
                <p class="col-md-8 fs-4 text-muted mt-3">
                    Manage your store's inventory, track customer accounts, and process sales transactions seamlessly.
                </p>
                <div class="mt-4">
                    <a href="<?= base_url('/sales/create') ?>" class="btn btn-success btn-lg px-4 me-2 shadow-sm fw-bold">+ New Checkout</a>
                    <a href="<?= base_url('/products') ?>" class="btn btn-outline-dark btn-lg px-4 shadow-sm">View Inventory</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
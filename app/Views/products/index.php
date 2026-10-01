<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Inventory</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <?= view('nav') ?>

    <div class="container">
        <div class="row align-items-center mb-4">
            <div class="col">
                <h1 class="h3 fw-bold text-dark">Product Inventory</h1>
                <p class="text-muted mb-0">Manage stock quantities, prices, and catalog items.</p>
            </div>
            <div class="col text-end">
                <a href="<?= base_url('/products/create') ?>" class="btn btn-primary shadow-sm">+ Add New Product</a>
            </div>
        </div>

        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
                <?= session()->getFlashdata('success') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <div class="card shadow-sm border-0">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="table-dark">
                            <tr>
                                <th class="ps-3">ID</th>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Stock</th>
                                <th class="pe-3">Date Added</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($products) && is_array($products)): ?>
                                <?php foreach ($products as $product): ?>
                                    <tr>
                                        <td class="ps-3 fw-semibold">#<?= esc($product['id']) ?></td>
                                        <td><?= esc($product['name']) ?></td>
                                        <td>$<?= number_format($product['price'], 2) ?></td>
                                        <td>
                                            <?php if ($product['stock_quantity'] <= 5): ?>
                                                <span class="badge bg-danger"><?= esc($product['stock_quantity']) ?> Low Stock</span>
                                            <?php else: ?>
                                                <span class="badge bg-success"><?= esc($product['stock_quantity']) ?> In Stock</span>
                                            <?php endif; ?>
                                        </td>
                                        <td class="pe-3 text-muted small"><?= esc($product['created_at']) ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="5" class="text-center py-4 text-muted">No products found in inventory. Click "+ Add New Product" to start stocking your store!</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
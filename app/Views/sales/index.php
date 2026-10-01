<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales Transactions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <?= view('nav') ?>

    <div class="container">
        <div class="row align-items-center mb-4">
            <div class="col">
                <h1 class="h3 fw-bold text-dark">Sales Transactions</h1>
                <p class="text-muted mb-0">View recent store checkouts and completed orders.</p>
            </div>
            <div class="col text-end">
                <a href="<?= base_url('/sales/create') ?>" class="btn btn-success shadow-sm">+ New Checkout</a>
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
                                <th class="ps-3">Sale ID</th>
                                <th>Customer ID</th>
                                <th>Product ID</th>
                                <th>Qty</th>
                                <th>Total Price</th>
                                <th class="pe-3">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($sales) && is_array($sales)): ?>
                                <?php foreach ($sales as $sale): ?>
                                    <tr>
                                        <td class="ps-3 fw-semibold">#<?= esc($sale['id']) ?></td>
                                        <td>#<?= esc($sale['customer_id']) ?></td>
                                        <td>#<?= esc($sale['product_id']) ?></td>
                                        <td><?= esc($sale['quantity']) ?></td>
                                        <td class="fw-bold text-success">$<?= number_format($sale['total_price'], 2) ?></td>
                                        <td class="pe-3 text-muted small"><?= esc($sale['created_at']) ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="6" class="text-center py-4 text-muted">No sales transactions recorded yet. Click "+ New Checkout" to make a sale!</td>
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
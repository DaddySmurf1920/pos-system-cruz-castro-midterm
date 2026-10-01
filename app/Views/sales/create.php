<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Checkout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <?= view('nav') ?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm border-0 my-4">
                    <div class="card-body p-4">
                        <h2 class="h4 fw-bold mb-3">🛒 Point of Sale Checkout</h2>
                        
                        <?php if (session()->getFlashdata('error')): ?>
                            <div class="alert alert-danger alert-dismissible fade show shadow-sm" role="alert">
                                <?= session()->getFlashdata('error') ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php endif; ?>

                        <form action="<?= base_url('/sales/store') ?>" method="post">
                            <?= csrf_field() ?>
                            
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Select Customer</label>
                                <select name="customer_id" class="form-select" required>
                                    <option value="">-- Choose Customer --</option>
                                    <?php if (!empty($customers)): ?>
                                        <?php foreach ($customers as $customer): ?>
                                            <option value="<?= $customer['id'] ?>"><?= esc($customer['full_name']) ?> (<?= esc($customer['email']) ?>)</option>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Select Product</label>
                                <select name="product_id" class="form-select" required>
                                    <option value="">-- Choose Product --</option>
                                    <?php if (!empty($products)): ?>
                                        <?php foreach ($products as $product): ?>
                                            <option value="<?= $product['id'] ?>"><?= esc($product['name']) ?> - $<?= number_format($product['price'], 2) ?> (Stock: <?= $product['stock_quantity'] ?>)</option>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Quantity</label>
                                <input type="number" name="quantity" class="form-control" value="1" min="1" required>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mt-4">
                                <a href="<?= base_url('/sales') ?>" class="text-decoration-none text-muted">&larr; Back to Sales</a>
                                <button type="submit" class="btn btn-success px-4 shadow-sm fw-bold">Complete Checkout</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
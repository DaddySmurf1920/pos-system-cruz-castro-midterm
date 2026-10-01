<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <?= view('nav') ?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm border-0 my-4">
                    <div class="card-body p-4">
                        <h2 class="h4 fw-bold mb-3">Add New Product</h2>
                        
                        <form action="<?= base_url('/products/store') ?>" method="post">
                            <?= csrf_field() ?>
                            
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Product Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter product name" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Price ($)</label>
                                <input type="number" step="0.01" name="price" class="form-control" placeholder="0.00" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Stock Quantity</label>
                                <input type="number" name="stock_quantity" class="form-control" value="10" required>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mt-4">
                                <a href="<?= base_url('/products') ?>" class="text-decoration-none text-muted">&larr; Back to Products</a>
                                <button type="submit" class="btn btn-primary px-4 shadow-sm">Save Product</button>
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
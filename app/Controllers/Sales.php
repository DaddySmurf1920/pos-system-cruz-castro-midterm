<?php

namespace App\Controllers;

use App\Models\SaleModel;
use App\Models\ProductModel;
use App\Models\CustomerModel;

class Sales extends BaseController
{
    public function index()
    {
        $saleModel = new SaleModel();
        $data['sales'] = $saleModel->orderBy('id', 'DESC')->findAll();
        return view('sales/index', $data);
    }

    public function create()
    {
        $customerModel = new CustomerModel();
        $productModel = new ProductModel();

        $data['customers'] = $customerModel->findAll();
        $data['products'] = $productModel->findAll();

        return view('sales/create', $data);
    }

    public function store()
    {
        $saleModel = new SaleModel();
        $productModel = new ProductModel();

        $productId = $this->request->getPost('product_id');
        $quantity = (int) $this->request->getPost('quantity');
        $customerId = $this->request->getPost('customer_id');

        $product = $productModel->find($productId);

        if (!$product) {
            return redirect()->back()->with('error', 'Selected product not found.');
        }

        if ($product['stock_quantity'] < $quantity) {
            return redirect()->back()->with('error', 'Insufficient stock available!');
        }

        $totalPrice = $product['price'] * $quantity;
        
        $userId = session()->get('user_id') ?? 1;

        $saleModel->save([
            'customer_id' => $customerId,
            'product_id'  => $productId,
            'user_id'     => $userId,
            'quantity'    => $quantity,
            'total_price' => $totalPrice
        ]);

        $newStock = $product['stock_quantity'] - $quantity;
        $productModel->update($productId, ['stock_quantity' => $newStock]);

        return redirect()->to('/sales')->with('success', 'Checkout completed successfully! Stock updated.');
    }
}
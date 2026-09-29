<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $data['users'] = [
            ['username' => 'admin_john', 'fullname' => 'John Doe', 'role' => 'Administrator'],
            ['username' => 'cashier_sarah', 'fullname' => 'Sarah Jenkins', 'role' => 'Cashier'],
            ['username' => 'manager_mike', 'fullname' => 'Michael Scott', 'role' => 'Store Manager'],
            ['username' => 'stock_emily', 'fullname' => 'Emily Blunt', 'role' => 'Inventory Clerk'],
            ['username' => 'cashier_dan', 'fullname' => 'Daniel Craig', 'role' => 'Cashier'],
        ];

        return view('users/index', $data);
    }
}
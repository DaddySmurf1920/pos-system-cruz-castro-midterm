<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $data['customers'] = [
            ['name' => 'Alice Johnson', 'email' => 'alice@example.com', 'phone' => '555-0101'],
            ['name' => 'Bob Smith', 'email' => 'bob@example.com', 'phone' => '555-0192'],
            ['name' => 'Charlie Brown', 'email' => 'charlie@example.com', 'phone' => '555-0143'],
            ['name' => 'Diana Prince', 'email' => 'diana@example.com', 'phone' => '555-0174'],
            ['name' => 'Ethan Hunt', 'email' => 'ethan@example.com', 'phone' => '555-0155'],
        ];

        return view('customers/index', $data);
    }
}
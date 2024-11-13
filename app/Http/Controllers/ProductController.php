<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
    // Base URL for the DummyJSON API
    private $baseUrl = 'https://dummyjson.com/products';

    // 1. Get all products
    public function index()
    {

    }

    // 2. Get a single product by ID
    public function show($id)
    {

    }

    // 3. Search products by query
    public function search(Request $request)
    {

    }

    // 4. Get products with pagination
    public function paginate(Request $request)
    {

    }

    // 5. Sort products
    public function sort(Request $request)
    {

    }

    // 6. Get all product categories
    public function categories()
    {

    }

    // 7. Get products by category
    public function byCategory($category)
    {

    }

    // 8. Add a new product
    public function store(Request $request)
    {

    }

    // 9. Update an existing product
    public function update(Request $request, $id)
    {

    }

    // 10. Delete a product
    public function destroy($id)
    {

    }
}

// If you encounter SSL certificate issues when making HTTP requests,
// you can disable SSL verification (not recommended for production) by adding the verify option:

// $response = Http::withOptions(['verify' => false])->get($this->baseUrl);



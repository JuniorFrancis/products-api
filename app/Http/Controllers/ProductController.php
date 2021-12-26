<?php 

namespace App\Http\Controllers;

use App\Services\ProductService;

class ProductController extends Controller
{
    public function getAllSoldProducts(ProductService $productService)
    {
        return response()->json($productService->getAllSoldProducts());
    }
}


?>
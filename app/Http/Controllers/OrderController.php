<?php 

namespace App\Http\Controllers;

use App\Services\OrderService;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function getAll(OrderService $orderService)
    {
        return response()->json($orderService->getAll());
    }

    public function create(OrderService $orderService, Request $request){
        return response()->json($orderService->create($request));
    }
}


?>
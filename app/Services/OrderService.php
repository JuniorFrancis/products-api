<?php 

namespace App\Services;

use App\Models\Order;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Request;

class OrderService 
{
    private $result = [];

    public function getAll(): array
    {
        $order = new Order();

        $this->result = $order->getData();
        
        if(!empty($this->result)) {
            return $this->result->all();
        } else {
            throw new HttpResponseException(Response::make([
                'errors' => ['Não foi possível retornar os dados solicitados.']
            ]));
        }
    }

    public function getNextOrderId(): int 
    {
        $orderId = $this->getAll();
        $orderId = end($orderId);
        $orderId = $orderId['orderId']+1;

        return $orderId;
    }

    public function create(Request $request): array 
    {
        $order = new Order();

        $orderId = $this->getNextOrderId();
        $product = $request->input('product');
        $seller = $request->input('seller');
        $price = $request->input('price');
        $country = $request->input('country');
        
        $newOrder = [
            'orderId' => $orderId,
            'product' => $product,
            'seller' => $seller,
            'price' => $price,
            'country' => $country
        ];

       return  $order->setData($newOrder);

    }
}



?>
<?php 

namespace App\Services;

use App\Models\Products;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Exceptions\HttpResponseException;

class ProductService 
{
    private Products $products;
    private $result = [];

    public function __construct(Products $product)
    {
        $this->products = $product;
    }

    public function getAllSoldProducts(): array
    {
        $this->result = $this->products->getData();
        
        if(!empty($this->result)) {
            return $this->result->all();
        } else {
            throw new HttpResponseException(Response::make([
                'errors' => ['Não foi possível retornar os dados solicitados.']
            ]));
        }
    }
}



?>
<?php 

namespace App\Models;

class Products extends Model
{
    public function __construct()
    {
        $this->data = collect(
            [
                [
                  "orderId"=> 2019060001,
                  "product"=> "Laptop #1",
                  "seller"=> "Seller #1",
                  "country"=> "BRA",
                  "price"=> 1000
                ],
                [
                  "orderId"=> 2019060002,
                  "product"=> "Laptop #2",
                  "seller"=> "Seller #2",
                  "country"=> "ARG",
                  "price"=> 1250
                ],
                [
                  "orderId"=> 2019060003,
                  "product"=> "Laptop #3",
                  "seller"=> "Seller #3",
                  "country"=> "ARG",
                  "price"=> 1900
                ],
                [
                  "orderId"=> 2019060004,
                  "product"=> "Printer #1",
                  "seller"=> "Seller #1",
                  "country"=> "MEX",
                  "price"=> 199
                ],
                [
                  "orderId"=> 2019060005,
                  "product"=> "Smartphone #1",
                  "seller"=> "Seller #2",
                  "country"=> "BRA",
                  "price"=> 999
                ],
                [
                  "orderId"=> 2019060006,
                  "product"=> "Printer #2",
                  "seller"=> "Seller #3",
                  "country"=> "BRA",
                  "price"=> 399
                ],
                [
                  "orderId"=> 2019060007,
                  "product"=> "Smartphone #2",
                  "seller"=> "Seller #1",
                  "country"=> "ARG",
                  "price"=> 1499
                ],
                [
                  "orderId"=> 2019060008,
                  "product"=> "Laptop #3",
                  "seller"=> "Seller #2",
                  "country"=> "ARG",
                  "price"=> 1900
                ],
                [
                  "orderId"=> 2019060009,
                  "product"=> "Smartphone #1",
                  "seller"=> "Seller #3",
                  "country"=> "MEX",
                  "price"=> 999
                ],
                [
                  "orderId"=> 2019060010,
                  "product"=> "Printer #2",
                  "seller"=> "Seller #1",
                  "country"=> "BRA",
                  "price"=> 399
                ],
                [
                  "orderId"=> 2019060011,
                  "product"=> "Printer #3",
                  "seller"=> "Seller #2",
                  "country"=> "ARG",
                  "price"=> 899
                ],
                [
                  "orderId"=> 2019060012,
                  "product"=> "Laptop #2",
                  "seller"=> "Seller #3",
                  "country"=> "MEX",
                  "price"=> 1250
                ],
                [
                  "orderId"=> 2019060013,
                  "product"=> "Smartphone #1",
                  "seller"=> "Seller #1",
                  "country"=> "BRA",
                  "price"=> 999
                ],
                [
                  "orderId"=> 2019060014,
                  "product"=> "Printer #1",
                  "seller"=> "Seller #2",
                  "country"=> "BRA",
                  "price"=> 199
                ],
                [
                  "orderId"=> 2019060015,
                  "product"=> "Smartphone #3",
                  "seller"=> "Seller #3",
                  "country"=> "ARG",
                  "price"=> 2399
                ],
                [
                  "orderId"=> 2019060016,
                  "product"=> "Laptop #3",
                  "seller"=> "Seller #1",
                  "country"=> "MEX",
                  "price"=> 1900
                ],
                [
                  "orderId"=> 2019060017,
                  "product"=> "Smartphone #1",
                  "seller"=> "Seller #2",
                  "country"=> "BRA",
                  "price"=> 999
                ],
                [
                  "orderId"=> 2019060018,
                  "product"=> "Laptop #3",
                  "seller"=> "Seller #3",
                  "country"=> "BRA",
                  "price"=> 1900
                ],
                [
                  "orderId"=> 2019060019,
                  "product"=> "Smartphone #3",
                  "seller"=> "Seller #1",
                  "country"=> "BRA",
                  "price"=> 2399
                ],
                [
                  "orderId"=> 2019060020,
                  "product"=> "Printer #1",
                  "seller"=> "Seller #2",
                  "country"=> "ARG",
                  "price"=> 199
                ],
                [
                  "orderId"=> 2019060021,
                  "product"=> "Smartphone #2",
                  "seller"=> "Seller #3",
                  "country"=> "MEX",
                  "price"=> 1499
                ],
                [
                  "orderId"=> 2019060022,
                  "product"=> "Laptop #3",
                  "seller"=> "Seller #1",
                  "country"=> "ARG",
                  "price"=> 1900
                ],
                [
                  "orderId"=> 2019060023,
                  "product"=> "Printer #1",
                  "seller"=> "Seller #2",
                  "country"=> "MEX",
                  "price"=> 199
                ],
                [
                  "orderId"=> 2019060024,
                  "product"=> "Smartphone #3",
                  "seller"=> "Seller #3",
                  "country"=> "BRA",
                  "price"=> 2399
                ],
                [
                  "orderId"=> 2019060025,
                  "product"=> "Laptop #3",
                  "seller"=> "Seller #1",
                  "country"=> "BRA",
                  "price"=> 1900
                ]
              ]              
                );
    }
}
?>
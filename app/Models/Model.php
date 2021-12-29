<?php 

namespace App\Models;

use Illuminate\Support\Collection;

abstract class Model
{
    protected Collection $data;

    public function getData(): Collection
    {
        return $this->data;
    }

    public function setData(array $data): array
    {
        $this->data->put('orders', $data);
        return $this->data->all();
    }
    
}
?>
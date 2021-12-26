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
    
}
?>
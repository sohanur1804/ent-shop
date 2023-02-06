<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductIndex extends Component
{
    public function render()
    {
        $product = Product::paginate(10);
        return view('livewire.product-index', [
            'products' => $product,
        ]);
    }
}

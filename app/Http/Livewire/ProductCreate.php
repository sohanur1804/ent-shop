<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductCreate extends Component
{

    public $name;
    public $price;
    public $stock;
    public $has_warrenty;
    public $price_code;
    public function render()
    {
        return view('livewire.product-create');
    }

    protected $rules = [
        'name' => 'required',
        'price' => 'required',
        'stock' => 'required',
        'has_warrenty' => 'required',
        'price_code' => 'required',
    ];
    public function formSubmit() {
        $this->validate();
        $product = Product::create([
            'name' => $this->name,
            'price' => $this->price,
            'stock' => $this->stock,
            'has_warrenty' =>$this->has_warrenty,
            'price_code' => $this->price_code,
        ]);

        flash()->addSuccess('New Product created successfully');

        return redirect()->route('product.index');
    }
}

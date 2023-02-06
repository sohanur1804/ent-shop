<form wire:submit.prevent="formSubmit">
    <div class="mb-6">
        @include('components.form-field', [
            'name' => 'name',
            'label' => 'Product Name',
            'type' => 'text',
            'placeholder' => 'Enter name',
            'required' => 'required',
        ])
    </div>
    <div class="mb-6">
        @include('components.form-field', [
            'name' => 'price',
            'label' => 'Product Price',
            'type' => 'number',
            'placeholder' => 'Enter Price',
            'required' => 'required',
        ])
    </div>
    <div class="mb-6">
        @include('components.form-field', [
            'name' => 'stock',
            'label' => 'Stock increase',
            'type' => 'number',
            'placeholder' => 'Enter number to increase',
            'required' => 'required',
        ])
    </div>
    <div class="mb-6">
        @include('components.form-field', [
            'name' => 'has_warrenty',
            'label' => 'Has warrenty',
            'type' => 'text',
            'placeholder' => 'This Product has warrenty?',
            'required' => 'required',
        ])
    </div>
    <div class="mb-6">
        @include('components.form-field', [
            'name' => 'price_code',
            'label' => 'Product price code',
            'type' => 'text',
            'placeholder' => 'Enter price code',
            'required' => 'required',
        ])
    </div>
    @include('components.wire-loading-btn')
</form>

<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Products') }}
            </h2>

            <a href="" class="bg-blue-500 p-4 rounded text-white hover:bg-blue-400 ">Add Existing Product</a>
            <a href="{{route('product.create')}}" class="bg-blue-500 p-4 rounded text-white hover:bg-blue-400 ">Add New Product</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <livewire:product-index />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

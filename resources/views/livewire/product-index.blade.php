<div>
    <table class="w-full table-auto">
        <p>All Product Count:- {{count($products)}} items</p>
        <tr>
            <th class="border px-4 py-2 text-center">Id </th>
            <th class="border px-4 py-2 text-center">Name </th>
            <th class="border px-4 py-2 text-center">Price</th>
            <th class="border px-4 py-2">Stock</th>
            <th class="border px-4 py-2">Has_warrenty</th>
            {{-- <th class="border px-4 py-2">Updated at</th> --}}
            <th class="border px-4 py-2">Actions</th>
        </tr>
            @foreach($products as $product)
        <tr>

            <td class="border px-4 py-2">{{$product->id}}</td>
            <td class="border px-4 py-2">{{$product->name}}</td>
            <td class="border px-4 py-2">{{$product->price}}</td>
            <td class="border px-4 py-2">{{$product->stock}}</td>
            <td class="border px-4 py-2">{{$product->has_warrenty}}</td>
            {{-- <td class="border px-4 py-2 text-center"></td> --}}
            <td class="border px-4 py-2 text-center">
                <div class="flex items-center justify-center">
                    <a href="">
                        @include('components.icons.edit')
                    </a>

                    <a class="px-2" href="">
                        @include('components.icons.eye')
                    </a>

                    <form onsubmit="return confirm('Are you sure?');"
                        wire:submit.prevent="">
                        <button type="submit">
                            @include('components.icons.trash')
                        </button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </table>
</div>

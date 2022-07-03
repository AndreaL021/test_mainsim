<x-layout>
    <x-slot name="title">Home</x-slot>
    <div class="container text-center">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <p class="mt-2">Selct a product</p>
        <div class="row">
            
            <form class="row d-flex justify-content-center" action="{{route('create')}}" method="post">
                @csrf
                <div class="col-12 d-flex justify-content-center mb-5">
                    <select name="product_id" class="form-select border-dark col-12" style="width: 150px">
                    @foreach ($products as $product)
                        <option value="{{$product->id}}">{{$product->product}}</option>
                    @endforeach
                    </select>
                </div>
                <input name="quantity" placeholder="Quantity" type="number" class="col-8" style="max-width: 500px;">
                <button type="submit" class="btn btn-info col-4" style="max-width: 300px;">Add</button>
            </form>
            
            <hr class="mt-3" style="height: 3px;">
            <div id="array" class="row d-flex justify-content-center">
                <div class="col-2">Id</div>
                <div class="col-2">Product</div>
                <div class="col-2">Quantity</div>
                <div class="col-2">Price</div>
                <div class="col-2">Total</div>
                <div class="col-2">Remove</div>
                @if (sizeof($lists)>0)
                    @foreach ($lists as $list)
                        <div class="col-2">{{$list->id}}</div>
                        <div class="col-2">{{$list->product->product}}</div>
                        <div class="col-2">{{$list->quantity}}</div>
                        <div class="col-2">{{$list->product->price}}</div>
                        <div class="col-2">{{$list->product->price*$list->quantity}}</div>
                        <form class="col-2" action="{{route('delete', compact('list'))}}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn"><i class="fa-solid fa-trash-can" style="color: red"></i></button>
                        </form>
                    @endforeach
                @endif

            </div>
            <div id="total" class="mt-2">{{$totalPrice}}</div>

            <hr class="mt-3" style="height: 3px;">
            <p>Selct a product</p>
            
            <form class="row d-flex justify-content-center" action="{{route('update')}}" method="post">
                @csrf
                @method('put')
                <div class="col-12 d-flex justify-content-center mb-5">
                    <select name="product" class="form-select border-dark col-12" style="width: 150px">
                    @foreach ($products as $product)
                        <option value="{{$product->id}}">{{$product->product}}</option>
                    @endforeach
                    </select>
                </div>
                <input name="price" placeholder="Price" type="number" class="col-8" style="max-width: 500px;">
                <button type="submit" class="btn btn-info col-4" style="max-width: 300px;">Update</button>
            </form>
        </div>
    </div>
</x-layout>
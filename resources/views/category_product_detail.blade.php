@foreach ($products as $product)
    {{$product->category->name}},
    {{$product->name}},
    {{$product->product_detail->description}}
    <br>
@endforeach
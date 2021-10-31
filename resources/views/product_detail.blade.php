@foreach ($products as $product)
    {{$product->name}},
    {{$product->product_detail->description}}
    <br>
@endforeach
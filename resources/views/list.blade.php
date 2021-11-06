<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LIST PRODUCT</title>
</head>
<body>
<br>
@foreach($product_types as $productType)
    @if($productType['type_name'] == 'MB')
        @foreach($productType['products'] as $product)
            <h3>{{$product['sku']}}</h3>
            <b>{{$product['name']}}</b>
            <p>{{$product['price']}}$</p>
            <p>Size {{$product['characters'][0]['value']}} MB</p><br>
            <k>________________________</k>
        @endforeach
    @elseif($productType['type_name'] == 'KG')
        @foreach($productType['products'] as $product)
            <h3>{{$product['sku']}}</h3>
            <b>{{$product['name']}}</b>
            <p>{{$product['price']}}$</p>
            <p>Weight {{$product['characters'][0]['value']}} KG</p>
            <k>________________________</k>
        @endforeach
    @elseif($productType['type_name'] == 'cm')
        {{--        {{dd($productType)}}--}}
        @foreach($productType['products'] as $product)
            <h3>{{$product['sku']}}</h3>
            <b>{{$product['name']}}</b>
            <p>{{$product['price']}}$</p>
            <p>Dimension {{$product['characters'][0]['value']}} x {{$product['characters'][1]['value']}}
                x {{$product['characters'][2]['value']}}</p>
            <k>________________________</k>
        @endforeach
    @endif
@endforeach
</body>
</html>

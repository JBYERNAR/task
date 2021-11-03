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
@foreach($lists as $el)
    <div class="alert alert-warning">
    <h3>{{$el->SKU}}</h3>
    <b>{{ $el->Name}}</b>
        <p>{{$el->Price}}$</p>
        <k>{{$el->Additional}}</k><br>
        <g>________________________</g>
    </div>
@endforeach
</body>
</html>

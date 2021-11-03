<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADD PRODUCT</title>
</head>
<body>
<h1>ADD PRODUCT</h1>
@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
            @endforeach
        </ul>
    </div>
    @endif
<form method="post" action="/add/save">
    @csrf
<div class="row g-3">
    <div class="col-sm-6">
        <label for="text" class="form-label">SKU</label>
        <input type="text" name="SKU" id="text" placeholder="" value="" required="" class="form-control">
    </div>

    <div class="col-sm-6">
        <label for="text" class="form-label">Name</label>
        <input type="text"  name="Name" id="text" placeholder="" value="" required="" class="form-control">
    </div>

    <div class="col-12">
        <label for="text" class="form-label">Price</label>
            <input type="text" name="Price" id="text" placeholder="Price" required="" class="form-control">
        </div>
    </div>
        </div>
        </div>
        <div class="col-md-5">
        <label for="country" class="form-label">Type Switcher</label>
        <select name="Type" class="form-select" id="country" required="">
            <option value="">Type Switcher</option>
            <option>Food</option>
            <option>Furniture</option>
            <option>Technique</option>
        </select>
    </div>
    <div class="col-12">
        <label for="text" class="form-label">Additional</label><br>
        <input type="text" name="Additional" id="text" placeholder="Additional" required="" class="form-control">
    </div>

<div class="col-sm-6">
    <button type="submit" class="btn btn-success">Save</button>
</div>

</div>
</form>

</body>
</html>

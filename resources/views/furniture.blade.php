@extends('layout')
@extends('layout')
<form method="post" action="{{route('furnituresv')}}">
    @csrf
    <label for="text" class="form-label">SKU</label>
    <input type="text" name="sku" id="text" placeholder="SKU" value="" required="" class="form-control"><br>
    <label for="text" class="form-label">Name</label>
    <input type="text" name="name" id="text" placeholder="Name" value="" required="" class="form-control"><br>
    <label for="text" class="form-label">Price</label>
    <input type="text" name="price" id="text" placeholder="Price" required="" class="form-control"><br>
    <label for="text" class="form-label">Height</label>
    <input type="text" name="height" id="text" placeholder="Height" required="" class="form-control"><br>
    <label for="text" class="form-label">Width</label>
    <input type="text" name="width" id="text" placeholder="Width" required="" class="form-control"><br>
    <label for="text" class="form-label">Length</label>
    <input type="text" name="length" id="text" placeholder="Dimension" required="" class="form-control"><br>
    <button type="submit" class="btn btn-success">Save</button>
</form>

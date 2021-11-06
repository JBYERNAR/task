@extends('layout')
<form method="post" action="{{route('dvdsv')}}">
    @csrf
    <label for="text" class="form-label">SKU</label>
    <input type="text" name="sku" id="text" placeholder="SKU" value="" required="" class="form-control"><br>
    <label for="text" class="form-label">Name</label>
    <input type="text" name="name" id="text" placeholder="Name" value="" required="" class="form-control"><br>
    <label for="text" class="form-label">Price</label>
    <input type="text" name="price" id="text" placeholder="Price" required="" class="form-control"><br>
    <label for="text" class="form-label">Size</label>
    <input type="text" name="size" id="text" placeholder="Size" required="" class="form-control"><br>
    <button type="submit" class="btn btn-success">Save</button>
</form>

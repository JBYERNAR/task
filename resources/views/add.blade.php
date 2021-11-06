@extends('layout')
<div class="col-md-5">
    <label for="country" class="form-label">Type Switcher</label>
    <select name="Type" class="form-select" required="" onchange="onclick_link(this.value)">
        <option value="">Type Switcher</option>
        <option>DVD</option>
        <option>Book</option>
        <option>Furniture</option>

    </select>
</div>

<script>
    function onclick_link(val){
        if(val == 'DVD'){
            window.location.href = '/add/dvd';
        }else if(val == 'Book'){
            window.location.href = '/add/book';
        } else{
            window.location.href = '/add/furniture';
        }
    }
</script>

<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Models\Product;
use App\Models\ProductType;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function main()
    {
        return view('main');
    }

    public function add()
    {
        return view('add');
    }

    public function list()
    {
        $productTypes = ProductType::with(['products.characters'])->get()->toArray();

//        $products = Product::with('characters')->get()->toArray();
//        dd($products);
        return view('list')->with('product_types',$productTypes);
    }

    public function add_book()
    {
        return view('book');
    }

    public function add_dvd()
    {
        return view('dvd');
    }

    public function add_furniture()
    {
        return view('furniture');
    }

    public function save_dvd(Request $request)
    {
        $request->validate([
            'sku' => 'required',
            'name' => 'required',
            'price' => 'required|integer',
            'size' => 'required|integer',
        ]);

        $product = Product::create([
            'sku'=>$request['sku'],
            'name'=>$request['name'],
            'price'=>$request['price'],
            'product_type_id'=>1
        ]);

        Character::create([
            'value'=>$request['size'],
            'type_id'=>1,
            'product_id'=>$product->id,
        ]);

        return redirect()->route('add');
    }

    public function save_book(Request $request){
        $request->validate([
            'sku' => 'required',
            'name' => 'required',
            'price' => 'required|integer',
            'weight' => 'required|integer',
        ]);

        $product = Product::create([
            'sku'=>$request['sku'],
            'name'=>$request['name'],
            'price'=>$request['price'],
            'product_type_id'=>2
        ]);

        Character::create([
            'value'=>$request['weight'],
            'type_id'=>2,
            'product_id'=>$product->id,
        ]);

        return redirect()->route('add');
    }

    public function save_furniture(Request $request){
        $valid = $request->validate([
            'sku' => 'required',
            'name' => 'required',
            'price' => 'required|integer',
            'height' => 'required|integer',
            'width' => 'required|integer',
            'length' => 'required|integer',
        ]);

        $data = Product::create([
            'sku'=>$request['sku'],
            'name'=>$request['name'],
            'price'=>$request['price'],
            'product_type_id'=>3
        ]);
        Character::create([
            'value'=>$request['height'],
            'type_id'=>3,
            'product_id'=>$data->id,
        ]);
        Character::create([
            'value'=>$request['width'],
            'type_id'=>4,
            'product_id'=>$data->id,
        ]);
        Character::create([
            'value'=>$request['length'],
            'type_id'=>5,
            'product_id'=>$data->id
        ]);

        return redirect()->route('add');
    }
}

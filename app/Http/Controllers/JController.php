<?php
//
//namespace App\Http\Controllers;
//
//use App\Models\Post;
//use Illuminate\Http\Request;
//use App\Models\Test;
//
//class JController extends Controller
//{
//    public function main(){
//        return view('main');
//    }
//
//    public function add(){
//        return view('add');
//    }
//
//    public function list(){
//        $tests = new Test();
//        return view('list',['lists'=> $tests->all()]);
//        }
//
//    public function add_save(Request $request){
//        $valid = $request->validate([
//            'SKU' => 'required|unique',
//            'Name'=> 'required',
//            'Price'=> 'required|integer',
//            'Additional'=> 'required'
//        ]);
//
//        $data = new Test();
//        $data->SKU = $request->input('SKU');
//        $data->Name = $request->input('Name');
//        $data->Price = $request->input('Price');
//        $data->Additional = $request->input('Additional');
//
//        $data->save();
//
//        return view('main');
//
//    }
//}

<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function list(Request $request){
       //  $request->validate([
       //      'email'=>'required|email',
       //      'password'=>'required|min:6'
       // ]);
       // $data = DB::table('categories')->get();
       //  $data = DB::table('products')->where('id','>','1')
       //  ->orwhere('price','>','40000')
       //                               ->get();
       //  $data = DB::table('categories')->get();
       //  $data = Category::all();
       //  $data = Category::orderBy('id','DESC')->get();
       //  $data = DB::table('categories')->where('id','=', 1)->get();
       //  $data = Category::all();
       //  $data1 = Category::where('id',2)->get();
       //  $data2 = Category::withTrashed()->get();
       //  $data3 = Category::onlyTrashed()->get();
       //  dd($data);
        $data = Category::paginate(15);
        $data->appends(['query'=>'category']);
        return view('category', compact('data'));
    }

    public function join(){
        // $data = DB::table('products')->leftJoin('categories','products.category_id', '=', 'categories.id')
            // ->select('products.*','categories.name AS category_name')->get();
        $data = DB::table('products')->rightJoin('categories','products.category_id', '=', 'categories.id')
                  ->select('products.name AS pro_name','categories.*')->get();
        dd($data);
    }

    public function add(){
        // DB::table('categories')->insert([
        //     ['name'=>'demo1'],['name'=>'demo2']
        //                                 ]);
        //c1
        $category = new Category();
        $category->name = 'category1';
        $category->save();
        //c2
        Category::create([
            'name'=>'category2'
                         ]);
    }

    public function update(){
        // DB::table('categories')->where('id','=','6')->update([
        //     'name'=>'demo category',
        //                                                      ]);
        //c1
        $category = Category::find(7);
        $category->name = 'category7';
        $category->save();
        // c2
        Category::where('id',8)->update([
            'name'=>'category8'
                                        ]);
    }

    public function delete(){
        // DB::table('categories')->where('id','>','3')->delete();
        // $category = Category::find(9);
        // $category->delete();
        // Category::where('id',8)->delete();
        Category::onlyTrashed()->where('id',8)->forceDelete();

    }

    public  function restore(){
        Category::onlyTrashed()->where('id',8)->restore();
    }
}

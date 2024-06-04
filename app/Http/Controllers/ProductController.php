<?php

namespace App\Http\Controllers;

use App\Models\Fruit;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class ProductController extends Controller
{
    public function list(){
        // $data = collect([1,2,3]);
        // $data2 = new Collection([1,2,3]);
        // $data3 = Collection::make([1,3,4]);
        $data = Product::all();
        // $data->each(function ($item,$key){
        //     echo $item->name."</br>";
        // });
        // $newData = $data->map(function ($item,$key){
        //     $item = $item->name."test";
        //     return $item;
        // });
        // $newData = $data->pluck('name');
        // $collection = collect([
        //                           'usd' => 1400,
        //                           'gbp' => 1200,
        //                           'eur' => 1000,
        //                       ]);
        //
        // $ratio = [
        //     'usd' => 1,
        //     'gbp' => 1.37,
        //     'eur' => 1.22,
        // ];
        //
        // $newCollection= $collection->reduce(function ($carry, $value, $key) use ($ratio) {
        //     return $carry + ($value * $ratio[$key]);
        // });
        // $collection = collect([
        //                           'Apple' => [
        //                               [
        //                                   'name' => 'iPhone 6S',
        //                                   'brand' => 'Apple'
        //                               ],
        //                           ],
        //                           'Samsung' => [
        //                               [
        //                                   'name' => 'Galaxy S7',
        //                                   'brand' => 'Samsung'
        //                               ],
        //                           ],
        //                       ]);
        //
        // $products = $collection->flatten(2);
        dd($data);
    }
}

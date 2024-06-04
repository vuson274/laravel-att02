<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    const CART_KEY = 'CART';
    public function setSession(Request $request){
        // session(['id'=>2]);
        // $request->session()->put('name','HTT');
        // $request->session()->put('test',null);
        // $request->session()->flash('status','dang nhap thanh cong');
        return redirect()->route('session')->with('status','tao session thanh cong');
    }

    public function getSession(Request $request){
        // echo session('id')."<br>";
        // echo $request->session()->get('name');
       // if ($request->session()->has('test')){
       //     echo 'co';
       // }else{
       //     echo "khong";
       // }
       //  $data = $request->session()->all();
        // dd($data);
        echo $request->session()->get('status');
    }

    public function delSession(Request $request){
        // $request->session()->forget(['test','name']);
        // $request->session()->flush();
        $data = $request->session()->pull('id');
    }

    public function viewSession(){
        $data = Product::all();
        return view('session', compact('data'));
    }

    public function cart(Request $request){
        $id = $request->id;
        if ($request->session()->exists(self::CART_KEY)){
            $cart = $request->session()->get(self::CART_KEY);
            $found = false;
            for ($i = 0; $i<count($cart); $i++){
                if ($cart[$i]['product']->id == $id){
                    $cart[$i]['quantity'] = $cart[$i]['quantity']+1;
                    $found = true;
                    break;
                }
            }
            if (!$found){
                $product =  $product = Product::find($id);
                array_push($cart,[
                    'product'=> $product,
                    'quantity'=>1,
                ]);
            }
            $request->session()->put(self::CART_KEY,$cart);
        }else{
            $cart = [];
            $product = Product::find($id);
            array_push($cart,[
                'product'=>$product,
                'quantity'=>1,
            ]);
            $request->session()->put(self::CART_KEY, $cart);
        }
        return back()->with('status', 'dat hang thanh cong');
    }

    public function listCart(Request $request){
        $data = $request->session()->get(self::CART_KEY);
        return view('cart', compact('data'));
    }
}

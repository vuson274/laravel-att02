<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Image;
use App\Models\Order;
use App\Models\Phone;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public  function  list(){
        // $data = User::find(2);
        $user = new User();
        $user['name']= 'sonvt';
        $user['email']= 'sonvt@gmail.com';
        $user['password']= Hash::make('123456');
        $user->save();

    }

    public function form(){
        return view('upload');
    }

    public function upload(Request $request){
        $data = $request->all();
        $file = $data['img'];
        $fileName = time().$file->getClientOriginalName();
        $file->storeAs('/user',$fileName,'public');
        $image = new Image();
        $image['imageable_id']= 2;
        $image['imageable_type']= User::class;
        $image['path'] = 'storage/user/'.$fileName;
        $image->save();
    }
}

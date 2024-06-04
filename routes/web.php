<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/test', function () {
    return view('welcome');
});

Route::get('/demo',function (){
    echo "Hello HTT";
});

Route::prefix('/admin')->group(function (){
    Route::get('/user/{id}', function ($id){
        echo "Day la trang user co id la ".$id;
    })->name('user');
    Route::get('/category', function (){
        echo "Day la trang category";
    });
});

Route::get('/login', function (){
    $name = 'att02';
    $name1 ='att03';
    return view('auth.login', compact('name','name1'))->with('name1', $name1)->with('name', $name);
});

// Route::post('/user',[CategoryController::class,'list']);

Route::get('/posts', function (\Illuminate\Http\Request $request){
    // if ($request->has('id')){
    //     echo 'true';
    // }else{
    //     echo 'false';
    // }
    return view('form');
});

Route::get('/active', function (){
    return view('active');
});
Route::get('/link', function (){
    return view('link');
});

Route::get('/category',[CategoryController::class,'list']);
Route::get('/join',[CategoryController::class,'join']);
Route::get('/add-category',[CategoryController::class,'add']);
Route::get('/update-category',[CategoryController::class,'update']);
Route::get('/delete-category',[CategoryController::class,'delete']);
Route::get('/restore',[CategoryController::class,'restore']);
Route::get('/signin',[\App\Http\Controllers\LoginController::class,'form'])->name('signin');
Route::post('/login',[\App\Http\Controllers\LoginController::class,'login'])->name('login');
Route::get('/user',[\App\Http\Controllers\UserController::class,'list'])->middleware('admin');
Route::get('/product',[\App\Http\Controllers\ProductController::class, 'list'])->name('product')->middleware('admin');
Route::get('/upload',[\App\Http\Controllers\UserController::class, 'form'])->name('upload.file');
Route::post('/upload',[\App\Http\Controllers\UserController::class,'upload'])->name('upload');
Route::get('/logout',[\App\Http\Controllers\LoginController::class,'logout'])->name('logout');
Route::get('/set-session',[\App\Http\Controllers\SessionController::class,'setSession']);
Route::get('/get-session',[\App\Http\Controllers\SessionController::class,'getSession']);
Route::get('/del-session',[\App\Http\Controllers\SessionController::class,'delSession']);
Route::get('/session',[\App\Http\Controllers\SessionController::class,'viewSession'])->name('session');
Route::get('/cart/{id}',[\App\Http\Controllers\SessionController::class,'cart'])->name('cart');
Route::get('/list-cart',[\App\Http\Controllers\SessionController::class,'listCart'])->name('list.cart');
Route::get('/sendmail', function (){
    // \Illuminate\Support\Facades\Mail::to('vuthanhson041995@gmail.com')->send(new \App\Mail\Message());
    // \Illuminate\Support\Facades\Mail::to('vuthanhson041995@gmail.com')->send(new \App\Mail\MessageShipped());
    dispatch(new \App\Jobs\SendEmail());
});
Route::get('/lang', function (\Illuminate\Http\Request $request){
    $lang = $request->query('lang');
    \Illuminate\Support\Facades\App::setLocale($lang);
   return view('lang');
});

Route::get('/create_user', function (){
    \App\Models\User::create([
        'name'=>'sonvt',
        'email'=>'sonvt123@gmail.com',
        'password'=>\Illuminate\Support\Facades\Hash::make(1234567),
        'api_token'=>\Illuminate\Support\Str::random(80),
                             ]);
});
// use App\Http\Controllers\ProfileController;
// use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
//
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
//
// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__ . '/auth.php';

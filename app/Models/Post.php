<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // protected $table ='';
    // protected $primaryKey = 'post_id';
    // protected $keyType = 'string';

    public function categories(){
        return $this->morphToMany(Category::class,'categoriesable');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductPackage extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title','slug', 'price', 'about'
    ];

    protected $hidden = [

    ];

    public function galleries(){
        return $this->hasMany(Gallery::class, 'product_packages_id', 'id');
    }
}

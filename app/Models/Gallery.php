<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'product_packages_id', 'image', 
    ];

    protected $hidden = [

    ];

    public function product_package(){
        return $this->belongsTo(ProductPackage::class, 'product_packages_id', 'id');
    }
}

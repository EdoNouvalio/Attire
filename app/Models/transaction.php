<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'product_packages_id', 'users_id', 'title',
        'transactions_total', 'transactions_status'
    ];

    protected $hidden = [

    ];

    public function product_package(){
        return $this->belongsTo(ProductPackage::class, 'product_packages_id', 'id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    protected $table = 'transactions';

    public function getProductsAttribute($value){
        return json_decode($value);
    }
}

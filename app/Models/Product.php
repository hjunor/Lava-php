<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = "product";
    public $timestamps = true;
    protected $fillable = ['name','value_purchase','value_sale','description','numberRegister'];

}

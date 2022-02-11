<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $fillable = [
        'category',
        'subcategory',
        'Name_of_the_Product',
        'Product_Price',
        'Product_Color',
        'Available_Stock',
        'Product_img',
        'Product_Description'
    ];
    public $timestamps=false;
}


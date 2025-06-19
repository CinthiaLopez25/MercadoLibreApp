<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'products';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'id_category',
        'name',
        'url',
        'description',
        'price',
        'stock',
        'image_url',
        'free_shipping',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function category() {
      return $this->belongsTo(Category::class);
    }

    public function cart() {
      return $this->belongsToMany(Cart::class,'items_cart','id_product', 'id_cart')->withPivot('item_amount');
    }

    public function purchase() {
      return $this->hasMany(Purchase::class, 'id_product');
    }
}

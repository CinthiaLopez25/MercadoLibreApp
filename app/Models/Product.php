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
        'description',
        'price',
        'stock',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function category() {
      return $this->belongsTo(Category::class);
    }

    public function product() {
      return $this->belongsToMany(Cart::class,'items_cart','id_product', 'id_cart')->withPivot('item_amount');
    }
}

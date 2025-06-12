<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ItemCart extends Model
{
  use HasFactory, SoftDeletes;

  protected $table = 'items_cart';
  protected $primaryKey = 'id';
  public $timestamps = true;

  protected $fillable = [
    'id_cart',
    'id_product',
    'item_amount',
    'created_at',
    'updated_at',
    'deleted_at'
  ];

  public function IdCart() {
    return $this->belongsTo(Cart::class, 'id_cart');
  }

  public function IdProduct() {
    return $this->belongsTo(Product::class, 'id_product');
  }
}

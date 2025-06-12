<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cart extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'carts';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
      'id_user',
      'created_at',
      'updated_at',
      'deleted_at'
    ];

    public function user() {
      return $this->belongsTo(User::class);
    }

    public function product() {
      return $this->belongsToMany(Product::class,'items_cart','id_cart', 'id_product')->withPivot('item_amount');
    }
}

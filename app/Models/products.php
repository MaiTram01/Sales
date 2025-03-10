<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = ['name', 'type_id', 'description', 'unit_price', 'promotion_price', 'image', 'unit'];
    public function type() {
        return $this->belongsTo(type_products::class);
    }
}

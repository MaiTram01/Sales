<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bills extends Model
{
    use HasFactory;
    protected $fillable = ['customer_id', 'date_order', 'total', 'payment', 'note'];
    public function customer() {
        return $this->belongsTo(customer::class);
    }
}

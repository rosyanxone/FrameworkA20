<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentalPs extends Model
{
    use HasFactory;
    
    public function brand() {
        return $this->belongsTo(Brand::class);
    }
    protected $table = 'rental_ps';
    protected $fillable = ['id', 'jenis', 'harga', 'per_week', 'brand_id'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public function RentalPs() {
        return $this->hasMany(RentalPs::class);
    }
    use HasFactory;
    
}

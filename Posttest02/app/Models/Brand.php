<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;

class Brand extends Model
{
    use HasFactory;
    
    public function RentalPs() {
        return $this->hasMany(RentalPs::class);
    }
}

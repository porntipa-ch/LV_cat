<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function refinance()
    {
        return $this->hasMany(Refinance::class);
    }
    public function refinanceOption()
    {
        return $this->hasMany(RefinanceOption::class);
    }
}

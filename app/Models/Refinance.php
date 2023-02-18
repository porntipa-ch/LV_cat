<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Refinance extends Model
{
    use HasFactory;
    protected $table = 'user_profiles';

    protected $primaryKey = 'id';

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
    public function user_profile()
    {
        return $this->belongsTo('App\UserProfile','user_id');
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}

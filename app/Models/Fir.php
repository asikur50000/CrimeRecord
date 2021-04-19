<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fir extends Model
{
    protected $guarded = [];
    public function station()
    {
        return $this -> belongsTo(Station::class);
    }
    
    public function category()
    {
        return $this -> belongsTo(Category::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Criminal extends Model
{
    protected $guarded = [];
    public function station()
    {
        return $this -> belongsTo(Station::class,'station_id','id');
    }
    
    public function category()
    {
        return $this -> belongsTo(Category::class,'category_id','id');
    }
}

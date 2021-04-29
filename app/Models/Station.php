<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = "stations";
    
    public function fir()
    {
        return $this -> hasMany(FIR::class);
    }

}

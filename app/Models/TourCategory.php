<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourCategory extends Model
{
    use HasFactory;
    protected $fillable = ['categorias_url',
                                    'title'];

    public function tours(){

        return $this->hasMany(Tour::class);
        
    }
}

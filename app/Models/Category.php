<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\GoodNew;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';

    public function goodNews(){
        return $this->hasMany(GoodNew::class);
    }
}

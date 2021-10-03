<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
USE App\Models\product;

class category extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function products(){
        return $this->BelongsToMany(product::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\category;
use App\Models\order;

class product extends Model
{
    use HasFactory;

    protected $guarded = [];

  public function category(){
        return $this->BelongsToMany(category::class);

    }


      public function orders(){
        return $this->BelongsToMany(order::class);
    }
}

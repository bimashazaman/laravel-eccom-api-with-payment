<?php

namespace Database\Factories;

use App\Models\category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoryFactory extends Factory
{

    protected $model = category::class;


    public function definition()
    {
        $name = $this->faker->jobTitle;

        $nameArr = explode('',$name);
        $name = trim($nameArr[0]);

        return [
            'name'=>$name,
            'slug'=>Str::slug($name),
        ];
    }
}

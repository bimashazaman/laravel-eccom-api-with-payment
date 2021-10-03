<?php

namespace Database\Factories;

use App\Models\product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{

    protected $model = product::class;


    public function definition()
    {

        $productSuffixes = ['sweater', ];

        $name = $this->faker->company();
        // $nameArr = explode('',$name);
        // $name = trim($nameArr[0]);


        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'description' => $this->faker->realText(320),
            'price'=> $this->faker->numberBetween(10000 ,100000),
        ];
    }
}

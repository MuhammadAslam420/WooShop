<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $product_name=$this->faker->unique()->words($nb=2,$asText=true);
        $slug=Str::slug($product_name);
        return [
            //
            'name'=>$product_name,
            'slug'=>$slug,
            'short_description'=>$this->faker->text(200),
            'description'=>$this->faker->text(500),
            'regular_price'=>$this->faker->numberBetween(100,20000),
            'SKU'=>'DIGi'.$this->faker->unique()->numberBetween(10,2000),
            'stock_status'=> 'instock' ,
            'quantity'=>$this->faker->numberBetween(10,100),
            'image'=>'shoe-img'.$this->faker->unique()->numberBetween(1,25).'.jpg',
            'category_id'=>$this->faker->numberBetween(1,5)
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Categorie;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->text($maxNbChars = 5),
            'description' => $this->faker->paragraph(),
            'price'=> $this->faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL),
            'size'=> $this->faker->randomElement(['xs','s','m','l','xl']),
            'availability'=> $this->faker->randomElement(['en solde','standard']),
            'reference'=> $this->faker->ean13(),
            'category_id'=> Categorie::find(rand(1, 2)),
            
            // 'image' => $this->faker->image('public/storage/images',640,480, null, false),

        ];
    }
}

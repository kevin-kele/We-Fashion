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

    protected $imgs = [
        1 => [
            '0706301811_1_1_1.jpg',
            '1792455401_1_1_1.jpg',
            '0693445251_1_1_1.jpg',
            '3859401732_1_1_1.jpg',
            '3918402401_1_1_1.jpg',
            '3918420710_1_1_1.jpg',
            '4314509658_1_1_1.jpg',
            '7505410251_1_1_1.jpg',
            '9065437707_2_1_1.jpg'


        ],
        2 => [
            'wxl-_Carpentie-011.jpg',
            'wxl-_fideler_antic_blue5.jpg',
            'Wxl-_19PE_juin18_3490.jpg',
            'wxl-_New_Coleen-006.jpg',
            'Wxl-_Port_Jackson-031.jpg',
            'wxl-cala_punta-whiblack-081.jpg',
            'wxl-santo_amaro-whiblack-04.jpg',
            'wxl-seaside-denim_blue-01.jpg',
            'wxl-yagi-roseastripes-05.jpg',
            'wxl-stella-guerande-02.jpg'

        ]
        ];

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $cat = rand(1,2);
        return [
            'name' => $this->faker->text($maxNbChars = 8),
            'description' => $this->faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            'price'=> $this->faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 100),
            'size'=> $this->faker->randomElement(['xs','s','m','l','xl']),
            'availabilty'=> $this->faker->randomElement(['standard','en solde']),
            'reference'=> $this->faker->ean13(),
            'category'=> $cat,
            'image' => 'images/'.$this->randImg($cat)
 
        ];
    }

    public function randImg($cat) {

            if($cat==1) {
                $count = count($this->imgs[1]) -1;
                return 'hommes/'.$this->imgs[1][rand(0,$count)];
            } 
            $count = count($this->imgs[2]) -1;
                return 'femmes/'.$this->imgs[2][rand(0,$count)];

    }
}

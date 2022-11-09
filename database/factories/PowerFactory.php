<?php

namespace Database\Factories;

use App\Models\Power;
use Illuminate\Database\Eloquent\Factories\Factory;

class PowerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Power::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $images = [
            'https://static.wixstatic.com/media/d1e09d_5723fba4c61c40e797e5a202398a9b23~mv2.jpg/v1/fill/w_625,h_420,al_c,lg_1,q_80/458-1.jpg',
            'https://static.wixstatic.com/media/87294f_e1a45a6db8a041079cf152ecf9b4a245~mv2_d_1920_1551_s_2.jpg/v1/fill/w_690,h_464,al_c,q_80,usm_0.66_1.00_0.01/Ferrari%20488%20GTB.jpg',
            'https://static.wixstatic.com/media/87294f_75fbcab05ec4414593a8df71e362dcc8~mv2_d_1920_1551_s_2.jpg/v1/fill/w_690,h_464,al_c,q_80,usm_0.66_1.00_0.01/610lp-4.jpg',
            'https://static.wixstatic.com/media/87294f_f14f569371b24fe289667ab88caae12a~mv2.jpg/v1/fill/w_690,h_464,al_c,q_80,usm_0.66_1.00_0.01/McLaren%20720S.jpg',
            'https://static.wixstatic.com/media/87294f_183fad44ac1c4681abb92b359e63e3d2~mv2.jpg/v1/fill/w_690,h_464,al_c,q_80,usm_0.66_1.00_0.01/650ss.jpg',
            'https://static.wixstatic.com/media/87294f_ad8adab9e1844e5e901e05c9ce620ff0~mv2.jpg/v1/fill/w_690,h_464,al_c,q_80,usm_0.66_1.00_0.01/McLaren%20570S.jpg',
        ];
            
        $title = [
            'Ferrari 458 Italia',
            'Ferrari 488 GTB',
            'Lamborghini Huracan LP610',
            'McLaren 720S',
            'McLaren 650S',
            'McLaren 570S',
        ];

        $model = [
            '2門2人座',
            '2門4人座'
        ];

        $engine = [
            'V型8缸/雙渦輪增壓',
            'V型10缸/自然進氣',
            'V型6缸/雙渦輪增壓',
        ];

        $​exhaust = [
            '4499c.c.',
            '5204c.c.',
            '3799c.c.',
        ];

        $​max_horsepower = [
            '650hp/7250rpm',
            '570hp/7500rpm',
            '720hp/7500rpm',
        ];

        $​​max_torque = [
            '69.1kgm/6000rpm',
            '78.5kgm/5500rpm',
            '61.2kgm/5000rpm',
        ];

        return [
            'title' => $this->faker->randomElement($title),
            'image' => $this->faker->randomElement($images),
            'model' => $this->faker->randomElement($model),
            'engine' => $this->faker->randomElement($engine),
            '​exhaust' => $this->faker->randomElement($​exhaust),
            // 'max_horsepower' => $this->faker->randomElement($max_horsepower),
            // 'max_torque' => $this->faker->randomElement($max_torque),
            'price' => $this->faker->numberBetween($min = 12000, $max = 20000),
            'on_sale' => $this->faker->boolean(true),
            // 'order' => $this->faker->unique()->numberBetween(1, 20),
        ];

    }
}

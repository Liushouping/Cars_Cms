<?php

namespace Database\Factories;

use App\Models\Banner;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BannerFactory extends Factory
{
    protected $model = Banner::class;

    public function definition()
    {
        $images = [
            'https://img.asiayo.com/img/banner/banner_202103084706L.png',
            'https://img.asiayo.com/img/banner/banner_202102246219L.png',
            'https://img.asiayo.com/img/banner/banner_202103233843L.png'
        ];
        
        $title = [
            '時時刻刻約會',
            '現在下訂，立馬優惠大方送',
            '好運道～好運來',
        ];

        return [
            'title' => $this->faker->randomElement($title),
            'description' => $this->faker->realText(200),
            'on_sale' => $this->faker->boolean(true),
            'order' => $this->faker->unique()->numberBetween(1, 100),
            'link' => $this->faker->url,
            'image' => $this->faker->randomElement($images),
        ];
    }
}
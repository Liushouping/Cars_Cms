<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition()
    {
        $images = [
            'https://img.asiayo.com/img/banner/banner_202103084706L.png',
            'https://img.asiayo.com/img/banner/banner_202103084706L.png',
            'https://img.asiayo.com/img/banner/banner_202103084706L.png',
            'https://img.asiayo.com/img/banner/banner_202103084706L.png',
            'https://img.asiayo.com/img/banner/banner_202103084706L.png',
            'https://img.asiayo.com/img/banner/banner_202103084706L.png',
        ];
        
        $title = [
            '【 墾丁包棟 】超Ｑ摩艾就在這',
            '【 墾丁露營 】一生必體驗一次',
            '【 墾丁住宿 】網友激推',
            '【高雄二日遊】花季一泊二食',
            '【花蓮景點推薦】花蓮必拍五大熱門夢幻海景！',
        ];

        return [
            'title' => $this->faker->randomElement($title),
            'content' => $this->faker->realText(200),
            'on_sale' => $this->faker->boolean(true),
            'order' => '1',
            'image' => $this->faker->randomElement($images),
            'slug' => $this->faker->realText(10),
            'excerpt'=> $this->faker->realText(30),
            'subject_id' => '1'
        ];
    }
}
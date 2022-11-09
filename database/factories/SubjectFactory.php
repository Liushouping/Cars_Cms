<?php

namespace Database\Factories;

use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SubjectFactory extends Factory
{
    protected $model = Subject::class;

    public function definition()
    {
        
        $name = [
            '體驗生活',
            '休閒娛樂',
            '吃喝享樂'
        ];

        $slug = [
            'food',
            'egg',
            'wood'
        ];

        return [
            'name' => $this->faker->randomElement($name),
            'slug' => $this->faker->unique()->randomElement($slug)
        ];
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Dcat\Admin\Traits\HasDateTimeFormatter;

class Power extends Model
{
    use HasFactory,HasDateTimeFormatter;

    protected $table = 'powers';

    protected $fillable = [
        'title',
        'description',
        'model',
        'engine',
        '​exhaust',
        'max_horsepower',
        '​max_torque',
        'price',
        'order',
        'phone'
    ];

    protected $casts = [
        'on_sale' => 'boolean',
    ];

    public function getImageUrlAttribute()
    {
        // 如果 image 字段本身就已经是完整的 url 就直接返回
        if (Str::startsWith($this->attributes['image'], ['http://', 'https://'])) {
            return $this->attributes['image'];
        }
        return \Storage::disk('public')->url($this->attributes['image']);
    }

    // 定义一个public方法访问图片或文件
    public function getImage()
    {
        if (Str::contains($this->image, '//')) {
            return $this->image;
        }
    
        return Storage::disk('admin')->url($this->image);
    }
}

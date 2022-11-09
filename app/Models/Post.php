<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Dcat\Admin\Traits\HasDateTimeFormatter;
// use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory, HasDateTimeFormatter;

    protected $fillable = [
        'title',
        'content',
        'order',
        'image',
		'excerpt',
		'slug',
		'subject_id',
    ];

    protected $casts = [
        'on_sale' => 'boolean',
    ];

    public function getImageUrlAttribute()
    {
        if (Str::startsWith($this->attributes['image'], ['http://', 'https://'])) {
            return $this->attributes['image'];
        }
        return \Storage::disk('public')->url($this->attributes['image']);
    }

    public function getImage()
    {
        if (Str::contains($this->image, '//')) {
            return $this->image;
        }
    
        return Storage::disk('admin')->url($this->image);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function scopeonsale($query) {
      return $query->where('on_sale', true);
   }
}

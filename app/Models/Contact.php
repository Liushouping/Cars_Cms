<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Dcat\Admin\Traits\HasDateTimeFormatter;

class Contact extends Model
{
    use HasFactory,HasDateTimeFormatter;

    protected $fillable = [
        'name',
        'body',
        'email'
    ];
}

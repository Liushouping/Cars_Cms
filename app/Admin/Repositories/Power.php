<?php

namespace App\Admin\Repositories;

use App\Models\Power as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Power extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}

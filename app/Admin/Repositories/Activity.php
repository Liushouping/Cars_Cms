<?php

namespace App\Admin\Repositories;

use App\Models\Activity as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Activity extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}

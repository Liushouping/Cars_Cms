<?php

namespace App\Admin\Repositories;

use App\Models\Sop as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Sop extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}

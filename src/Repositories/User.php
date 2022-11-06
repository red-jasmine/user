<?php

namespace RedJasmine\User\Repositories;

use RedJasmine\User\Models\User as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class User extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}

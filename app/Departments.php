<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departments extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'departments';

    /**
     * The database primary key value.
     *
     * @var string
     */
    protected $primaryKey = 'department_id';
}

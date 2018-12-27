<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    /**
     * The database primary key value.
     *
     * @var string
     */
    protected $primaryKey = 'company_id';

    public function departments()
    {
        return $this->hasMany('App\Departments');
    }
}

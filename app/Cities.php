<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cities';

    /**
     * The database primary key value.
     *
     * @var string
     */
    protected $primaryKey = 'city_id';

    public function companies()
    {
        return $this->hasMany('App\Companies');
    }

}

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
    protected $fillable = [
        'city_name',
        'zip_code',
    ];
    protected $table = 'cities';

    /**
     * The database primary key value.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    public function companies()
    {
        return $this->hasMany('App\Companies','city_id');
    }

    public function canDelete()
    {
        return !count($this->companies) > 0;
    }

}

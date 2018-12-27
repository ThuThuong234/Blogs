<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'companies';
    /**
     * The database primary key value.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    public function departments()
    {
        return $this->hasMany('App\Departments','company_id');
    }
    public function cities(){
        return $this->belongsTo('App\Cities','city_id');
    }
}

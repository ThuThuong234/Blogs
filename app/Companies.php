<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    protected $fillable = [
        'company_name',
        'city_id',
        'logo_url',
    ];
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

    public function canDelete()
    {
        return !count($this->departments) > 0;
    }
}

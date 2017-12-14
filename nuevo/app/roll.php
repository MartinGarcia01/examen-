<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class roll extends Model
{
    protected $table = 'roll';

    protected $primaryKey = 'id';

    protected $fillable = ['descripcion'];

    public $timestamps = false;
     public function User()
    {
        return $this->belongsTo('App\User','id','Users_id');
    }//
}

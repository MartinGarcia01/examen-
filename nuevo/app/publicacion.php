<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class publicacion extends Model
{
     protected $table = 'publicacion';

    protected $primaryKey = 'id';

    protected $fillable = ['titulo','descripcion','user_id'];

    public $timestamps = false;
  public function User()
    {
        return $this->hasOne('App\User','id','user_id');
    }
}

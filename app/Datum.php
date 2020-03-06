<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datum extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'data';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['type_id', 'user_id', 'qty', 'credited', 'polished'];

	public function user(){
		return $this->belongsTo('App\customer','user_id','id');
	}
	public function type(){
		return $this->belongsTo('App\Grain','type_id','id');
	}
}

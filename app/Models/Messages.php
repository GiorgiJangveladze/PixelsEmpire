<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    public $table = 'messages';
    protected $fillable = ['message','name'];

    public function getObj($id = null)
	{
		if($id == null)
		{
	    	return $this->get();
		}else
		{
			return $this->find($id);
		}
	}
}

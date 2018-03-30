<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public $table = 'countries';
    protected $fillable = ['name','color'];

    public function getObj($id = null)
	{
		if($id == null)
		{
	    	return $this->get();
		}else
		{
			return $this->find($id);
		}
		return 'ádsasdadasd';
	}

}

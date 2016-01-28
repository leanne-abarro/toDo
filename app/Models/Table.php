<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
      /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tables';

    public function items (){
    	return $this -> hasMany('App\Models\Item');
    }

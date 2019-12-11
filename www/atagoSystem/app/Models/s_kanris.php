<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class s_kanris extends Model
{
    protected $table = 's_kanris';
    protected $primaryKey = "ITEM_NUMBER";
    public $timestamps = false;

    public function cart() {
        return $this->hasMany('App\Models\Cart', 'id');
    }
}

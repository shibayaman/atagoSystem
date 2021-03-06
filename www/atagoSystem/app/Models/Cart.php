<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
	protected $fillable = ['amount'];

	public $timestamps = false;

	// public function product()
	// {
	// 	return $this->belongsTo('App\Models\s_kanris', 'product_id', 'ITEM_NUMBER');
	// }

	public function item() {
		return $this->belongsTo('App\Models\item', 'product_id', 'item_number');
	}
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InvoiceLine extends Model
{

	protected $fillable = [
        'invoice_id', 'product_id', 'quantity',
    ];
    public function product(){
        return $this->belongsTo('App\Product');
    }
    public function invoice(){
        return $this->hasMany('App\Invoice');
    }
}

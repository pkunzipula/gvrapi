<?php

namespace App;

class Customer extends Model
{
    public function invoices() 
    {
    	return $this->belongsToMany(Invoice::class);
    }
}

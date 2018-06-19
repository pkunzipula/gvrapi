<?php

namespace App;

class Invoice extends Model
{
    public function customers()
    {
    	return $this->belongsToMany(Customer::class);
    }
}

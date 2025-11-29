<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Eloquent\Customer;

class Meal extends Model
{
    public function customer()
        {
            return $this->belongsTo(Customer::class);
        }

    function food () {
        return $this -> belongsTo(Food::class);
    }
}

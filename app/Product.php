<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * Get the user who supplied this product
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'supplier_user_id');
    }
}

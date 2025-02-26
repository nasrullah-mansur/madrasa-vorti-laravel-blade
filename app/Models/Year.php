<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    public function months() {
        return $this->hasMany(Month::class);
    }
}

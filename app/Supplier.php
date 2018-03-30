<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    public function bills() {
      return $this->hasMany(Bill::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = ['full_name', 'fantasy_name'];

    public function bills() {
      return $this->hasMany(Bill::class);
    }
}

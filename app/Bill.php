<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $fillable = [
      'description',
      'due_date',
      'amount',
      'supplier_id'
    ];

    public function supplier() {
      return $this->belongsTo(Supplier::class);
    }
}

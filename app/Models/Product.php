<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  
    public function price()
{
  return $this->hasOne(Price::class);
}
public function color()
{
  return $this->hasOne(Color::class);
}
}

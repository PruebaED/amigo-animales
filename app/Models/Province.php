<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
  use HasFactory;

  protected $primaryKey = 'province_id';
  public $timestamps = false;

  public function animals() 
  {
  	return $this->hasMany(Animal::class, 'animal_id');
  }

  public function users()
  {
  	return $this->hasMany(User::class, 'user_id');
  }
}

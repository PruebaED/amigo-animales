<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adoption extends Model
{
  use HasFactory;

  protected $primaryKey = 'adoption_id';
  public $timestamps = false;

  public function userAdoption()
  {
  	return $this->belongsTo(User::class, 'user_id');
  }

  public function animalAdoption()
  {
  	return $this->belongsTo(Animal::class, 'animal_id');
  }
}

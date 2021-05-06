<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
  use HasFactory;

  protected $primaryKey = 'animal_id';
  public $timestamps = false;

  public function provinceAnimal()
  {
  	return $this->belongsTo(Province::class, 'province_id');
  }

  public function userAnimal()
  {
  	return $this->belongsTo(User::class, 'user_id');
  }

  public function adoptions()
  {
  	return $this->hasMany(Adoption::class, 'adoption_id');
  }

  public function fosters()
  {
  	return $this->hasMany(Foster::class, 'foster_id');
  }
}

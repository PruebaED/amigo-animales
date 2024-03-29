<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foster extends Model
{
  use HasFactory;

  protected $primaryKey = 'foster_id';
  public $timestamps = false;

  public function userFoster()
  {
  	return $this->belongsTo(User::class, 'user_id');
  }

  public function animalFoster()
  {
  	return $this->belongsTo(Animal::class, 'animal_id');
  }
}

<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
  use HasFactory, Notifiable;

  protected $primaryKey = 'user_id';
  public $timestamps = false;

  public function userProvince()
  {
  	return $this->belongsTo(Province::class, 'province_id');
  }

  public function animals()
  {
  	return $this->hasMany(Animal::class, 'animal_id');
  }

  public function adoptions()
  {
  	return $this->hasMany(Adoption::class, 'adoption_id');
  }

  public function fosters()
  {
  	return $this->hasMany(Foster::class, 'foster_id');
  }

  public function reports()
  {
    return $this->hasMany(Report::class, 'report_id');
  }
}

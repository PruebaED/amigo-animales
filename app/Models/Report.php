<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
  use HasFactory;

	protected $primaryKey = 'report_id';
	public $timestamps = false;

  public function userReport()
  {
  	return $this->belongsTo(User::class, 'user_id');
  }

  public function animalReport()
  {
  	return $this->belongsTo(Animal::class, 'animal_id');
  }

  public function provinceReport()
  {
  	return $this->belongsTo(Province::class, 'province_id');
  }
}

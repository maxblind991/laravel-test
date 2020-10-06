<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answers extends Model
{

  protected $with = ['answers'];
  public function answers() {
    return $this->hasOne('App\Models\Questionnaire');
  }
}

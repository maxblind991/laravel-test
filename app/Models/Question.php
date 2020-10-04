<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
  /**
  * Get the user that owns the phone.
  */
  public function questionnaire()
  {
    return $this->belongsTo('App\Models\Questionnaire');
  }
}

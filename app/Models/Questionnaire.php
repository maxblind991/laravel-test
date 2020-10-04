<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Questionnaire extends Model
{
    protected $fillable = ['name'];

    protected $with = ['question', 'order_key'];

    /**
   * Get the question record associated with the questionnaire.
   */
  public function question()
  {
      return $this->hasOne('App\Models\Question');
  }
}

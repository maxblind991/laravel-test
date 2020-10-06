<?php

namespace App\Http\Controllers;

use App\Models\Questionnaire;
use Illuminate\Support\Facades\DB;


class QuestionnaireController extends Controller
{

    public static $questionnaire_id;

    public function single(Questionnaire $questionnaire)
    {

    }

    public function slug( $slug ) {
      $questions = $this->get_questions( $slug );
      return view('questionnaires', ['questions' => $questions, 'success' => false, 'questionnaire_id' => self::$questionnaire_id ]);
    }

    public static function get_questions( $questionnaire, $by = 'slug' ) {
      if( $by == 'id') {
        self::$questionnaire_id = $questionnaire;
      } else {
        self::$questionnaire_id = self::get_id($by, $questionnaire);
      }

      return DB::table('questions')->orderBy('order_key')->where('questionnaire_id', self::$questionnaire_id)->get();
    }

    public static function get_id( $col, $value ) {
      $rows = DB::table('questionnaires')->where($col, $value)->first();
      return $rows->id;
    }
}

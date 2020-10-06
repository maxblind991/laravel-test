<?php

namespace App\Http\Controllers;

use App\Models\Answers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class AnswersController extends Controller
{
    public function submitted( Request $request ) {

      $save = $this->save_data( $request->all() );

      if( $save ) {
        $success = true;
      } else {
        $success = false;
      }

      //Get questions for return
      $questions = QuestionnaireController::get_questions($request->input('questionnaire_id'), 'id');

      return view('questionnaires', ['success' => $success, 'questions' => $questions, 'questionnaire_id' => $request->input('questionnaire_id')]);
    }

    public function save_data( $request ) {
      $inputs = $request;

      return DB::table('answers')->insert(array(
          'questionnaire_id' => $inputs['questionnaire_id'],
          'answers' => serialize($inputs['answers'])
      ));
    }
}

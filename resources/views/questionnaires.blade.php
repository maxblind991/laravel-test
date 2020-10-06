<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
      <div class="wrapper">

        <section id="questionnaire">
          <div class="questionnaire__questions">
            @if( $success )
            <div class="alert alert-success" role="alert">
              Answers saved!
            </div>
            @endif
            <form action="" method="post">
              @csrf
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col" style="width: 30px;">#</th>
                    <th scope="col">Question</th>
                    <th scope="col">Answer</th>
                  </tr>
                </thead>
                <tbody>
                  @if ($questions)
                  @foreach ($questions as $question)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{$question->question}}</td>
                    <td><input class="form-control" type="text" name="answers[]" value="" /></td>
                  </tr>
                  @endforeach
                  @endif
                </tbody>
              </table>
              <input type="hidden" name="questionnaire_id" value="{{$questionnaire_id}}" />
              <button type="submit" class="btn btn-primary">Submit</button>

            </form>
          </div>
        </section>

      </div>
    </body>
</html>

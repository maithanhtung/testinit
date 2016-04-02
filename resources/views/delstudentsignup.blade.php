<!DOCTYPE html>
<html>
    <head>
        <title>Assignment 2</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="css.css">

    </head>
    <body>
         <div class="container">
        <p>Course code: {{ $exam->ccode }} <br> Course name: {{ $exam->cname }} <br> Exam name: {{ $exam->exname }} <br> Date: {{ $exam->date }} <br> Time: {{ $exam->time }} <br> Place: {{ $exam->place }} </p>

        {!! Form::open(array('route' => array('postDelSignupStudent', $exam->id))) !!}

            Student ID : {!! Form::input('string', 'studentid') !!} <br>
            
            {!! Form::submit('Submit') !!}

            {!! Form::close() !!}
        </div>
    </body>
</html>
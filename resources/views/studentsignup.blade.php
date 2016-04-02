<!DOCTYPE html>
<html>
    <head>
        <title>Assignment 2</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="css.css">

    </head>
    <body>
         <div class="container">
            Sign Up Exam:
          <p>Course code: {{ $exam->ccode }} <br> Course name: {{ $exam->cname }} <br> Exam name: {{ $exam->exname }} <br> Date: {{ $exam->date }} <br> Time: {{ $exam->time }} <br> Place: {{ $exam->place }} </p>
        {!! Form::open(array('route' => array('postSignupStudent', $exam->id))) !!}
            <table style="width:100%; text-align:left;">
                <tr>
                  <th></th>
                  <th></th>
                </tr>
           <tr>    
             <td>Student ID:</td>  
             <td>{!! Form::input('string', 'studentid') !!} </td>
          </tr>

            <tr>    
             <td>Group:</td>  
             <td> {!! Form::input('string', 'group') !!}</td>
           </tr>

           <tr>    
             <td>Last Name:</td>  
             <td> {!! Form::input('string', 'lastname') !!}</td>
          </tr>

            <tr>    
             <td>First Name:</td>  
             <td>{!! Form::input('string', 'firstname') !!}</td>
           </tr>
       </table>
            <br>
            {!! Form::submit('Submit') !!}

            {!! Form::close() !!}
        </div>
    </body>
</html>
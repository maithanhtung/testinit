<!DOCTYPE html>
<html>
    <head>
        <title>Assignment 2</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div class="container">
             Exam:
            <p>Course code: {{ $exam->ccode }} <br> Course name: {{ $exam->cname }} <br> Exam name: {{ $exam->exname }} <br> Date: {{ $exam->date }} <br> Time: {{ $exam->time }} <br> Place: {{ $exam->place }} </p>

            {!! Form::open(array('route' => array('postUpdateExam', $exam->id))) !!}

                <table style="width:100%; text-align:left;">
                <tr>
                  <th></th>
                  <th></th>
                </tr>
           <tr>    
             <td>Course Code: </td>  
             <td> {!! Form::text('ccode', $exam->ccode)  !!} </td>
          </tr>

            <tr>    
             <td>Course Name: </td>  
             <td>{!! Form::text('cname', $exam->cname)  !!}</td>
           </tr>

           <tr>    
             <td> Exam Name:</td>  
             <td> {!! Form::text('exname', $exam->exname)  !!}</td>
          </tr>

            <tr>    
             <td> Date:</td>  
             <td>{!! Form::text('date', $exam->date)  !!}</td>
           </tr>

            <tr>    
             <td>Time:</td>  
             <td>{!! Form::text('time', $exam->time)  !!}</td>
           </tr>

            <tr>    
             <td>Place:</td>  
             <td>{!! Form::text('place', $exam->place)  !!}</td>
           </tr>
       </table>
       <br>
           
        	{!! Form::submit('Edit exam') !!}

        	{!! Form::close() !!}

        </div>
    </body>
</html>

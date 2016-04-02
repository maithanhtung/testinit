<!DOCTYPE html>
<html>
    <head>
        <title>Assignment 2</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div class="container">
            {!! Form::open(array('route' => 'postExam')) !!}
             <table style="width:100%; text-align:left;">
                <tr>
                  <th></th>
                  <th></th>
                </tr>
           <tr>    
             <td>Course Code: </td>  
             <td> {!! Form::input('string', 'ccode') !!}</td>
          </tr>

            <tr>    
             <td>Course Name: </td>  
             <td>{!! Form::input('string', 'cname') !!}</td>
           </tr>

           <tr>    
             <td> Exam Name:</td>  
             <td> {!! Form::input('string', 'exname') !!}</td>
          </tr>

            <tr>    
             <td> Date:</td>  
             <td>{!! Form::input('string', 'date') !!}</td>
           </tr>

            <tr>    
             <td>Time:</td>  
             <td>{!! Form::input('string', 'time') !!}</td>
           </tr>

            <tr>    
             <td>Place:</td>  
             <td>{!! Form::input('string', 'place') !!}</td>
           </tr>
       </table>
       <br>
        	{!! Form::submit('Add exam') !!}

        	{!! Form::close() !!}

        </div>
    </body>
</html>

<!DOCTYPE html>
<html>
    <head>
        <title>Assignment 2</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="css.css">

    </head>
    <body>
        <div class="container">
            Exam:
            <p>Course code: {{ $exam->ccode }} <br> Course name: {{ $exam->cname }} <br> Exam name: {{ $exam->exname }} <br> Date: {{ $exam->date }} <br> Time: {{ $exam->time }} <br> Place: {{ $exam->place }} </p>
        	List students: 
          <table style="width:100%; text-align:left;">
                <tr>
                    <th>Student Id</th>
                    <th>Group</th> 
                    <th>Last Name</th>
                    <th>First Name</th>
                    
                </tr>
            @foreach ($signups as $signup) 
            <tr>
                <td>{{ $signup->studentid }}</td>
                <td>{{ $signup->group }}</td> 
                <td>{{ $signup->lastname }}</td>
                <td>{{ $signup->firstname }}</td>
                     </tr>
        	@endforeach
            </table>
            <a href="{{ URL::previous() }}"><button>Back</button></a>
        </div>
    </body>
</html>
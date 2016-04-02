<!DOCTYPE html>
<html>
    <head>
        <title>Assignment 2</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div class="container">
            <table style="width:100%; text-align:left;">
                <tr>
                    <th>Course Code</th>
                    <th>Course Name</th> 
                    <th>Exam Name</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Place</th>
                    <th></th>
                    <th></th>
                </tr>
        	@foreach ($exams as $exam)        
        	<tr>
                <td>{{ $exam->ccode }}</td>
                <td>{{ $exam->cname }}</td> 
                <td>{{ $exam->exname }}</td>
                <td>{{ $exam->date }}</td>
                <td>{{ $exam->time }}</td>
                <td>{{ $exam->place }}</td>

            <td><a href="./student/exam/{{ $exam->id }}"><button>Sign up</button></a></td>
            <td><a href="./student/exam/{{ $exam->id }}/delete"><button>Delete Sign up</button></a></td>
            </tr> 
        	
        	@endforeach
            </table>
        </div>
    </body>
</html>
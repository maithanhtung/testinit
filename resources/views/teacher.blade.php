<!DOCTYPE html>
<html>
    <head>
        <title>Assignment 2</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="css.css">

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
        		{{ Form::open(['route' => ['Delexam', $exam->id], 'method' => 'delete']) }}
                        <td> <button type="submit">Delete</button></td>
                                    {{ Form::close() }}
				<td><a href="./teacher/exam/{{ $exam->id }}"><button>Sign up list</button></a></td>
				<td><a href="./teacher/exam/{{ $exam->id }}/update"><button>Edit exam</button></a></td>

            </tr> 
        	
        	@endforeach
            </table>
            <a href="./addexam"><button>ADD EXAM</button></a>

        </div>
    </body>
</html>
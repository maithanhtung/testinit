<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Exam;
use App\Signup;
use DB;

class ExamController extends Controller{
	public function postExam(Request $request){
		$ccode = $request->input('ccode');
		$cname = $request->input('cname');
		$exname = $request->input('exname');
		$date = $request->input('date');
		$time = $request->input('time');
		$place = $request->input('place');
		DB::table('Exams') 
            ->insert(array('ccode' => $ccode,'cname' => $cname,'exname' => $exname,'date' => $date,'time' => $time,'place' => $place));
            // ->insert(array('cname' => $cname));
            // ->insert(array('exname' => $exname));
            // ->insert(array('date' => $date));
            // ->insert(array('time' => $time));
            // ->insert(array('place' => $place));
		
		
		return redirect()->route('teacher');

	}

	public function delExam($id){
		DB::table('Exams')
				->where('id',$id)->delete();
		Signup::where('exam_id',$id)->delete();		
				echo json_encode('Exam Was Deleted Successfully..');
				return view('teacher', ['exams' => Exam::all()]);


	}

	public function viewTeacher(){
		return view('teacher', ['exams' => Exam::all()]);
	}

 	public function viewStudent(){
		return view('student', ['exams' => Exam::all()]);
	}

 	public function getSignupStudent($id){
 		$exam = Exam::find($id);
		return view('studentsignup', ['exam' => $exam]);
	}

 	public function getSignupTeacher($id){
 		$exam = Exam::find($id);
 		$signups = Signup::where('exam_id',$id)->get();
		return view('teachersignup', ['exam' => $exam, 'signups' => $signups]);
	}

 	public function getUpdateExam($id){
 		$exam = Exam::find($id);
		return view('updateexam', ['exam' => $exam]);
	}

 	public function postUpdateExam($id, Request $request){
 		$exam = Exam::find($id)->update([
 			'ccode' => $request->input('ccode'),
 			'cname' => $request->input('cname'),
 			'exname' => $request->input('exname'),
 			'date' => $request->input('date'),
 			'time' => $request->input('time'),
 			'place' => $request->input('place'),

 			]);

		return redirect()->route('teacher');
	}

 	public function postSignupStudent($id, Request $request){
		$studentid = $request->input('studentid');
		$group = $request->input('group');
		$lastname = $request->input('lastname');
		$firstname = $request->input('firstname');
		$exam_id = $id;

		$signup = Signup::where('studentid',$studentid)->where('exam_id',$exam_id)->first();

		if (is_null($signup)) {
			DB::table('Signups') 
            	->insert(array('studentid' => $studentid,'group' => $group,'lastname' => $lastname,'firstname' => $firstname, 'exam_id' => $exam_id));
		}

		return redirect()->route('student');
	}

 	public function getDelSignupStudent($id){
 		$exam = Exam::find($id);
		return view('delstudentsignup', ['exam' => $exam]);
	}

 	public function postDelSignupStudent($id, Request $request){
		$studentid = $request->input('studentid');
		$exam_id = $id;

		$signup = Signup::where('studentid',$studentid)->where('exam_id',$exam_id)->first();

		if (!is_null($signup)) {
			$signup->delete();
		}

		return redirect()->route('student');
	}
}
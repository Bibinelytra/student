<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Students;
use App\Mark;


class studentController extends Controller
{
    //


    public function insert(Request $request){
        
        $student = new Students();

        $student->name = request('name');
        $student->age = request('age');
        $student->gender = request('gender');
        $student->reporting_teacher = request('teacher');



        $student->save();
        return redirect('/')->with('alert-success', 'The data was saved successfully');

        }


        public function studentsList(){
        	$Students = Students::all();
            return view('students-list')->with('Students', $Students);
        }


        public function find_by_id($id){
        	$Students = Students::where('id',"=", $id)->first();
            return view('edit-student')->with('Students', $Students);
        }

        public static function delete($id){
         DB::table('students')->where('id', '=', $id)->delete();
         return redirect('/students-list')->with('alert-error', 'The data deleted successfully');


          }


        public function update(request $request){

        DB::table('students')
            ->where('id', request('id'))
            ->update(['name' => request('name'), 'age' => request('age'), 'gender' => request('gender'), 'reporting_teacher' => request('teacher')]);
                  return redirect('/students-list')->with('alert-success', 'The data updated successfully');
   	
        }


        public function marksList(){
            $Students = Mark::all();
            return view('marks-list')->with('Students', $Students);
        }


         public function add_mark_view(){
        	$Students = Students::all();
            return view('add-mark')->with('Students', $Students);
        }
     

     public function add_mark(request $request){

        $mark = new Mark();

        $mark->student_id = request('name');
        $mark->term = request('term');
        $mark->science = request('science');
        $mark->maths = request('maths');
        $mark->history = request('history');




        $mark->save();
        return redirect('/mark-list')->with('alert-success', 'The data was saved successfully');
   	
        }


}

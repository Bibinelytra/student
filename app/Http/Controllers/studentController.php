<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Students;

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


}

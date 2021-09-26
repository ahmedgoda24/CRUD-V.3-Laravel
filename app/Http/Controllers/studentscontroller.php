<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class studentscontroller extends Controller
{

    // show data in table
    public function student(){

        $students=student::get();
        return view('students.all_student',compact('students'));
    }

    // details row of table
    public function studentdetails($id){
        $student=student::where("id",$id)->first();
        return view('students.studentdetails',compact('student'));
    }

    // 
    public function createstudent(){
        return view('students.create_student');
    }

    // add and store student from form to table
    public function storestudent(Request $requst){
        $requst->validate([
            'name' => 'required|min:3|max:20',
            'age' => 'required|min:2',
            'email'=>'required|email:rfc|unique:students,email'
        ]);

        $student=student::create([
            'name'=>$requst->name,
            'email'=>$requst->email,
            'age'=>$requst->age,
        ]);
       return redirect(Route("all.student"))->with('done','student was added');
    }

    // edit student in form
    public function editstudent($id){
        $student=student::where("id",$id)->first();
        return view('students.editstudent',compact('student'));
    }

    // update student
    public function updatestudent(Request $requst,$id){
        $requst->validate([
            'name' => 'required|min:3|max:15',
            'age' => 'required|min:2',
            'email'=>'required|email:rfc|unique:students,email,' .$id
        ]);
        // student::where("id",$id)->first();
      student::find($id)->update([
          'name' => $requst['name'],
          'email' => $requst['email'],
          'age' => $requst['age']
        ]);
   
       return redirect(Route("all.student"))->with('done','student was updated');

    }

    // delete student

    public function deletestudent($id){
        student::find($id)->delete();
       return redirect(Route("all.student"))->with('done','student was deleted');


    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\College;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class StudentController extends Controller
{
    public function index(){
        $college_id = request('college_id');
        $sorting = request('sorting');
        
        if(is_null($sorting)){
            $sorting = 'asc';
        }

        if(is_null($college_id)){
            $students = Student::orderBy('name',$sorting)->get();
        }
        
        else{
            $students = Student::where('college_id',$college_id)->orderby('name',$sorting)->get();
        }
        $colleges = College::orderby('name')->pluck('name', 'id')->prepend('All Colleges', '');

        return view('student.index',compact('students','colleges','college_id','sorting')) ;
    }

    public function create(){
        $student = new Student();
        $colleges = College::orderby('name')->pluck('name', 'id')->prepend('All Colleges', '');
        return view('student.create', compact('student','colleges'));
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => ['required',Rule::unique('students'),'email'],
            'phone' => ['required','regex:/^[0-9]{8}$/'],
            'dob' => 'required',
            'college_id' => 'required',
        ]);

        Student::create($request->all());
        return redirect()->route('student.index');
    }

    public function edit($id){
        $student = Student::find($id);
        if(is_null($student))
            return redirect()->route('student.index');

        $colleges = College::orderby('name')->pluck('name', 'id')->prepend('All Colleges', '');

        return view('student.edit',compact('student','colleges'));
    }

    public function update($id, Request $request){
        $request->validate([
            'name' => 'required',
            'email' => ['required',Rule::unique('students')->ignore($id),'email'],
            'phone' => ['required','regex:/^[0-9]{8}$/'],
            'dob' => 'required',
            'college_id' => 'required',
        ]);

        $student = Student::find($id);
        if(is_null($student))
            return redirect()->route('student.index');

        $student->update($request->all());

        return redirect()->route('student.index');
    }

    public function show($id){
        $student = Student::find($id);
        if(is_null($student))
            return redirect()->route('student.index');

        return view('student.show',compact('student'));
    }

    public function destroy($id){
        $student = Student::find($id);

        if(is_null($student))
            return redirect()->route('student.index');

        $student->delete();
        return redirect()->route('student.index');
    }
}

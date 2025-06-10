<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Requests\StudentRequest;
use App\Http\Requests\UpdateStudentRequest;



class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

         $students = Student::paginate(5);
         return view('student',compact('students'));
          
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view('createStudent');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StudentRequest $request)
    { 
        $validatedData = $request->validated();
        $result =  Student::create($validatedData);
        return redirect()->route('students.index')
                     ->with('status', 'Student created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student  = Student::find($id);
        return view('viewStudent', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {

        ;
         $student  = Student::findorFail($student->id);
         return view('edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
        public function update(UpdateStudentRequest $request, Student $student)
        {
            //
        
            $validatedData = $request->validated();

            
            Student::where('email',$student->email)->update($validatedData);
            return redirect()->route('students.index')->with('status','Student updated successfully!');  
        }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('status','Student is deleted successfully');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     //
    // }

    // /**
    //  * Show the form for creating a new resource.
    //  */
    public function add(Request $request)
    {
        $students=new student();
        $students->name=$request->name;
        $students->email=$request->email;
         $students->phone_number=$request->phone;
         $students->create_date=$request->create_date;
         $students->update_date=$request->update_date;

        $students->save();
        if($students)
            {
                echo"new student";
            }else{
                return "oparetion felid";
            }
        // return $request->name();
        // return "add function called";
    }

      public function list()
    {
        $students = Student::all();

        return view('list_student', [
            'students' => $students
        ]);
    }
    
    function delete($id)
    {
        $isDelete=student::destroy($id);
        if($isDelete);
        return redirect('list');
    }

    function edit($id)
    {
        $student= student::find($id);
        return $student;

    }



    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(student $student)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(student $student)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, student $student)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(student $student)
    // {
    //     //
    // }
}


<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.showstudent');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.addstudent');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $office = new Official();
        $office ->addmission_no = $request->addmission_no;
        $office ->date = $request->datew;
        $office ->addmitted_to_class = $request->addmitted_to_class;
        $office ->roll_no = $request->roll_no;
        $office ->studnet_id = $student->id;
        $office ->save();

        $madrasha = new preMadrasha();
        $madrasha ->exam_class_name = $request->exam_class_name;
        $madrasha ->exam_class_name = $request->exam_class_name;
        $madrasha ->result = $request->result;
        $madrasha ->pass_year = $request->pass_year;
        $madrasha ->board = $request->board;
        $madrasha ->document_no = $request->document_no;
        $madrasha ->addmission_class = $request->addmission_class;
        $madrasha ->student_id = $student->id;
        $madrasha ->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('admin.pages.index', compact('students'));
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

        $student = new Student();

        $student->residensial = $request->residensial;
        $student->name_bn = $request->name_bn;
        $student->name_en = $request->name_en;
        $student->f_name_bn = $request->f_name_bn;
        $student->f_name_en = $request->f_name_en;
        $student->f_occupation = $request->f_occupation;
        $student->f_income = $request->f_income;
        $student->m_name_bn = $request->m_name_bn;
        $student->m_name_en = $request->m_name_en;
        $student->m_occupation = $request->m_occupation;
        $student->m_income = $request->m_income;
        $student->p_village = $request->p_village;
        $student->p_house = $request->p_house;
        $student->p_post = $request->p_post;
        $student->p_thana = $request->p_thana;
        $student->p_district = $request->p_district;
        $student->per_village = $request->per_village;
        $student->per_house = $request->per_house;
        $student->per_post = $request->per_post;
        $student->per_thana = $request->per_thana;
        $student->per_district = $request->per_district;
        $student->dob = $request->dob;
        $student->b_group = $request->b_group;
        $student->height = $request->height;
        $student->weight = $request->weight;
        $student->skin_color = $request->skin_color;
        $student->b_sign = $request->b_sign;
        $student->lg_name = $request->lg_name;
        $student->lg_village = $request->lg_village;
        $student->lg_house = $request->lg_house;
        $student->lg_post = $request->lg_post;
        $student->lg_thana = $request->lg_thana;
        $student->lg_district = $request->lg_district;
        $student->relationship = $request->relationship;
        $student->phone = $request->phone;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = $request->name_en . '_img.' . $image->getClientOriginalExtension();
            $size = $image->getClientSize();
            $destinationPath = public_path('/storage/student/images');
            $image->move($destinationPath, $name);
            $student->image = $name;
        }

        $student->save();

        $office = new Official();
        $office ->addmission_no = $request->addmission_no;
        $office ->date = $request->date;
        $office ->addmitted_to_class = $request->addmitted_to_class;
        $office ->roll_no = $request->roll_no;
        $office ->studnet_id = $student->id;
        $office ->save();

        $madrasha = new preMadrasha();
        $madrasha ->exam_class_name = $request->exam_class_name;
        $madrasha ->institute_name = $request->institute_name;
        $madrasha ->result = $request->result;
        $madrasha ->pass_year = $request->pass_year;
        $madrasha ->board = $request->board;
        $madrasha ->document_no = $request->document_no;
        $madrasha ->addmission_class = $request->addmission_class;
        $madrasha ->student_id = $student->id;
        $madrasha ->save();

        Session::flash('message', 'Student Recorded Successfully!!');
        return redirect()->route('student.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('admin.pages.showstudent', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('admin.pages.editstudent', compact('student'));
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

        $student->residensial = $request->residensial;
        $student->name_bn = $request->name_bn;
        $student->name_en = $request->name_en;
        $student->f_name_bn = $request->f_name_bn;
        $student->f_name_en = $request->f_name_en;
        $student->f_occupation = $request->f_occupation;
        $student->f_income = $request->f_income;
        $student->m_name_bn = $request->m_name_bn;
        $student->m_name_en = $request->m_name_en;
        $student->m_occupation = $request->m_occupation;
        $student->m_income = $request->m_income;
        $student->p_village = $request->p_village;
        $student->p_house = $request->p_house;
        $student->p_post = $request->p_post;
        $student->p_thana = $request->p_thana;
        $student->p_district = $request->p_district;
        $student->per_village = $request->per_village;
        $student->per_house = $request->per_house;
        $student->per_post = $request->per_post;
        $student->per_thana = $request->per_thana;
        $student->per_district = $request->per_district;
        $student->dob = $request->dob;
        $student->b_group = $request->b_group;
        $student->height = $request->height;
        $student->weight = $request->weight;
        $student->skin_color = $request->skin_color;
        $student->b_sign = $request->b_sign;
        $student->lg_name = $request->lg_name;
        $student->lg_village = $request->lg_village;
        $student->lg_house = $request->lg_house;
        $student->lg_post = $request->lg_post;
        $student->lg_thana = $request->lg_thana;
        $student->lg_district = $request->lg_district;
        $student->relationship = $request->relationship;
        $student->phone = $request->phone;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = $request->name_en . '_img.' . $image->getClientOriginalExtension();
            $size = $image->getClientSize();
            $destinationPath = public_path('/storage/student/images');
            $image->move($destinationPath, $name);
        }
        $student->image = $name;
        $student->save();

        Session::flash('message', 'Student Recorded Successfully!!');
        return redirect()->route('student.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
        Session::flash('message', 'Student Information Deleted Successfully!!');
        return redirect()->route('student.index');
    }
}

<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Student;
class takdimTalapAlelthakController extends Controller
{
    public function index(){
    	 return view('user.takdimTalapAlelthak');
    }
     public function store(Request $request){
    	$request->validate([
            'gender' => 'required',
            'name' => 'required',
            'ssn' => 'required',
            'code' => 'required',
            'birthday' => 'required',
            'residance' => 'required',
            'address' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'study_year' => 'required',
            'college' => 'required',
            'grade' => 'required',
            'upload_Card_image' => 'required',
            'upload_Photograph' => 'required',
            'father_name' => 'required',
            'father_relationship' => 'required',
            'father_ssn' => 'required',
            'father_job' => 'required',
            'father_phone' => 'required',
            'upload_father-Card_image' =>'required',
             'gender2' => 'required',
            'degree' => 'required',
            'rate' => 'required',
            'division' => 'required',
            'secondary_aggregate' => 'required',
            'guarantor_name' => 'required',
            'guarantor_ssn' => 'required',
            'guarantor_phone' => 'required',
            'guarantor_job' => 'required',
            'upload_guarantor-card-photo' => 'required',
            'father_Monthly-income' => 'required',
            'family_number' => 'required',
            'buliding_name' => 'required',
            'room_number' => 'required',
             'message' => 'required',
        ]);

        Student::create([
            'gender' => $request->gender,
             'name' => $request->name,
             'ssn' => $request->ssn,
             'code' => $request->code,
             'birthday' => $request->birthday,
             'residance' => $request->residance,
             'address' => $request->address,
             'email' => $request->email,
             'mobile' => $request->mobile,
             'study-year' => $request->study_year,
             'college' => $request->college,
             'grade' => $request->grade,
             'upload-Card_image' => $request->upload_ssn,
             'upload-Photograph' => $request->upload_Photograph,
             'father-name' => $request->father_name,
             'father-relationship' => $request->father_relationship,
             'father-ssn' => $request->father_ssn,
             'father-job' => $request->father_job,
             'father-phone' => $request->father_phone,
             'upload-father-Card_image' => $request->upload_father_Card_image,
             'gender2' => $request->gender2,
             'degree' => $request->degree,
             'rate' => $request->rate,
             'division' => $request->division,
             'secondary-aggregate' => $request->secondary_aggregate,
             'guarantor-name' => $request->guarantor_name,
             'guarantor-ssn' => $request->guarantor_ssn,
             'guarantor-phone' => $request->guarantor_phone,
             'guarantor-job' => $request->guarantor_job,
             'upload-guarantor-card-photo' => $request->upload_guarantor_card_photo,
             'father-Monthly-income' => $request->father_Monthly_income,
             'family-number' => $request->family_number,
             'buliding-name' => $request->buliding_name,
             'room-number' => $request->room_number,
             'message' => $request->message,
        ]);



        return view('user.requestSuccess');

    }
}

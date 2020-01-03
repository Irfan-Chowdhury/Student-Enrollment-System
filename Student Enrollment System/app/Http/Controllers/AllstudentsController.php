<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
session_start();
class AllstudentsController extends Controller
{


    public function allstudent()
    {
        $allstudent_info = DB::table('student_tbl')->get();  //ডাটাবেজ থেকে সব ডাটা তুলে আনা হলো।  
        
        $manage_student = view('admin.allstudent')->with('allstudent_info',$allstudent_info); //allstudent পেজে সাথে with এর মাধ্যমে ডাটা ইঙ্কলোড করে পাঠানো হলে

        return view('layout')->with('allstudent',$manage_student); //layout পেজে এর সাথে allstudent এবং manage_student পাঠানো হলো
    }


    



    public function view_student($student_id)
    {
        $student_description_view = DB::table('student_tbl')
                                    ->select('*')
                                    ->where('student_id',$student_id)
                                    ->first(); //for on Row
                                    
        // echo "<pre>";
        // print_r($student_description_view);
        // echo "</pre>";

        $manage_description_student = view('admin.studentview')
                                      ->with('student_description_profile',$student_description_view);

        return view('layout')->with('studentview',$manage_description_student);

        //return view('admin.studentview');
    }



    public function edit_student($student_id)
    {
        $student_description_view = DB::table('student_tbl')
                                    ->select('*')
                                    ->where('student_id',$student_id)
                                    ->first(); //for on Row
            // echo "<pre>";
            // print_r($student_description_view);
            // echo "</pre>";

        $manage_description_student = view('admin.student_edit')
                                    ->with('student_description_profile',$student_description_view);

        return view('layout')->with('student_edit',$manage_description_student);
    }


    public function update_student(Request $request,$student_id)
    {
        $data = array();
        $data['student_name']          = $request->student_name;
        $data['student_roll']          = $request->student_roll;
        $data['student_fathername']    = $request->student_fathername;
        $data['student_mothername']    = $request->student_mothername;
        $data['student_email']         = $request->student_email;
        $data['student_phone']         = $request->student_phone;
        $data['student_address']       = $request->student_address;
        $data['student_password']      = md5($request->student_password);
        // $data['student_department']    = $request->student_department;
        $data['student_admissionyear'] = $request->student_admissionyear;

        DB::table('student_tbl')
            ->where('student_id',$student_id)
            ->update($data);

            Session::put('update_msg','Student Updated Succesfully');
            return Redirect::to('/allstudent');
    }




    public function delete_student($student_id)
    {
        DB::table('student_tbl')
            ->where('student_id',$student_id)
            ->delete();

            return Redirect::to('/allstudent');
    }




// ======================== Student Dashboard ========================

    public function student_dashboard()
    {
        return view('student.dashboard');
    }


    public function student_login_dashboard(Request $request)
    {
        $email    = $request->student_email;
        $password = md5($request->student_password);
        $result   = DB::table('student_tbl')
                ->where('student_email',$email)
                ->where('student_password',$password)
                ->first();  //একটা টেবিল হলে first(); একাধিক টেবিল হলে get();

        if ($result) 
        {
             Session::put('student_email',$result->student_email);  //put() means as like set()
             Session::put('student_id',$result->student_id);
             return redirect::to('/student_dashboard');  //then it call admin_dashboard Method          
        }
        else 
        {
            Session::put('exception_std','Email or Password Invalid');
            return redirect::to('/');
        }
        
    }

    public function profile_student()
    {
        $student_id = Session::get('student_id');
        $student_profile = DB::table('student_tbl')
                        ->select('*')
                        ->where('student_id',$student_id)
                        ->first();
        // echo "<pre>";
        //     print_r($student_profile);
        // echo "</pre>";

        $manage_student_profile = view('student.student_view')
                                    ->with('student_description_profile',$student_profile);

        return view('student_layout')->with('student_view',$manage_student_profile);
    }


    public function logout_student()
    {
        Session::put('student_name',null);
        Session::put('student_id',null);

        return Redirect::to('/');
    }


    public function setting_student()
    {
        $student_id= Session::get('student_id');
        $student_description_view = DB::table('student_tbl')
                                    ->select('*')
                                    ->where('student_id',$student_id)
                                    ->first(); //for on Row
            // echo "<pre>";
            // print_r($student_description_view);
            // echo "</pre>";

        $manage_description_student = view('student.student_setting')
                                    ->with('student_description_profile',$student_description_view);

        return view('student_layout')->with('student_setting',$manage_description_student);
    }

    public function student_update(Request $request)
    {
        $student_id= Session::get('student_id'); 
        
        $data = array();
        $data['student_phone']         = $request->student_phone;
        $data['student_address']       = $request->student_address;
        $data['student_password']      = md5($request->student_password);

        DB::table('student_tbl')
            ->where('student_id',$student_id)
            ->update($data);

            Session::put('update_msg','Student Updated Succesfully');
            return Redirect::to('/student_setting');
    }








    







    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

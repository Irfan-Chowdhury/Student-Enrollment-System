<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CSEController extends Controller
{
    public function cse()
    {
        $csestudent_info = DB::table('student_tbl')
                           ->where(['student_department'=>1])
                           ->get();

        // echo  "<pre>";
        // print_r($csestudent_info);
        // echo  "</pre>";

        $manage_cse_student = view('admin.cse')->with('cse_student_info',$csestudent_info); //cse পেজে সাথে with এর মাধ্যমে $csestudent_info এর ডাটা ইঙ্কলোড করে পাঠানো হলে

        return view('layout')->with('cse',$manage_cse_student); //layout পেজে এর সাথে cse এবং manage_cse_student পাঠানো হলো
         
    }
}

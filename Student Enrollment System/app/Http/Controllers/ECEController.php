<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ECEController extends Controller
{
    public function ece()
    {
        $ecestudent_info = DB::table('student_tbl')
                           ->where(['student_department'=>3])
                           ->get();

        // echo  "<pre>";
        // print_r($ecestudent_info);
        // echo  "</pre>";

        $manage_ece_student = view('admin.ece')->with('ece_student_info',$ecestudent_info); //ece পেজে সাথে with এর মাধ্যমে $ecestudent_info এর ডাটা ইঙ্কলোড করে পাঠানো হলে

        return view('layout')->with('ece',$manage_ece_student); //layout পেজে এর সাথে ece এবং manage_ece_student পাঠানো হলো
    }
}

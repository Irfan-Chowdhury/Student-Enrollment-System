<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MBAController extends Controller
{
    public function mba()
    {
        $mbastudent_info = DB::table('student_tbl')
                           ->where(['student_department'=>5])
                           ->get();

        // echo  "<pre>";
        // print_r($mbastudent_info);
        // echo  "</pre>";

        $manage_mba_student = view('admin.mba')->with('mba_student_info',$mbastudent_info); //mba পেজে সাথে with এর মাধ্যমে $mbastudent_info এর ডাটা ইঙ্কলোড করে পাঠানো হলে

        return view('layout')->with('mba',$manage_mba_student); //layout পেজে এর সাথে mba এবং manage_mba_student পাঠানো হলো
    }
}

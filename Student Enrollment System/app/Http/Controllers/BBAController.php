<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BBAController extends Controller
{
    public function bba()
    {
        $bbastudent_info = DB::table('student_tbl')->where(['student_department'=>2])->get();

        // echo  "<pre>";
        // print_r($bbastudent_info);
        // echo  "</pre>";

        $manage_bba_student = view('admin.bba')->with('bba_student_info',$bbastudent_info); //bba পেজে সাথে with এর মাধ্যমে $bbastudent_info এর ডাটা ইঙ্কলোড করে পাঠানো হলে

        return view('layout')->with('cse',$manage_bba_student); //layout পেজে এর সাথে bba এবং manage_bba_student পাঠানো হলো
    }
}

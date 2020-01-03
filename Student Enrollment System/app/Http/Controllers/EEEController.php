<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class EEEController extends Controller
{
    public function eee()
    {
        $eeestudent_info = DB::table('student_tbl')
                           ->where(['student_department'=>4])
                           ->get();

        // echo  "<pre>";
        // print_r($eeestudent_info);
        // echo  "</pre>";

        $manage_eee_student = view('admin.eee')->with('eee_student_info',$eeestudent_info); //eee পেজে সাথে with এর মাধ্যমে $eeestudent_info এর ডাটা ইঙ্কলোড করে পাঠানো হলে

        return view('layout')->with('eee',$manage_eee_student); //layout পেজে এর সাথে eee এবং manage_eee_student পাঠানো হলো
    }
}

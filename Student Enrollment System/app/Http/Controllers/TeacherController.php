<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
Session_start();

class TeacherController extends Controller
{
    

    public function add_teacher()
    {
        return view('admin.addteacher');
    }


    public function saveteacher(Request $request)
    {
        $data = array();
            $data['teacher_name']         = $request->teacher_name;
            $data['teacher_phone']        = $request->teacher_phone;
            $data['teacher_address']      = $request->teacher_address;
            $data['teacher_department']  = $request->teacher_department;
           
            $image  = $request->file('teacher_image');



            if ($image) 
            {
                $image_name = str_random(20);
                $ext=strtolower($image->getClientOriginalExtension());
                $image_full_name=$image_name. '.' .$ext;
                $upload_path='image/';
                $image_url=$upload_path.$image_full_name;
                $success =$image->move($upload_path,$image_full_name);
                if ($success) 
                {
                    $data['teacher_image'] = $image_url;

                    DB::table('teacher_tbl')->insert($data);
                    Session::put('message_teacher','Teacher Added Succesfully');
                    return Redirect::to('/addteacher');
                }

            }
            $data['image']=$image_url;
                DB::table('teacher_tbl')->insert($data);
                Session::put('message_teacher','Teacher Added Succesfully');
                return Redirect::to('/addteacher');

                // DB::table('student_tbl')->insert($data);
                // Session::put('message','Student Added Succesfully');
                // return Redirect::to('/addstudent');
    }




    public function allteacher()
    {
        $allteacher_info = DB::table('teacher_tbl')->get();  //ডাটাবেজ থেকে সব ডাটা তুলে আনা হলো।  
        
        $manage_teacher = view('admin.allteacher')->with('allteacher_info',$allteacher_info); //allteacher পেজে সাথে with এর মাধ্যমে ডাটা ইঙ্কলোড করে পাঠানো হলে

        return view('layout')->with('allteacher',$manage_teacher); //layout পেজে এর সাথে allteacher এবং manage_teacher পাঠানো হলো
    }

    
}

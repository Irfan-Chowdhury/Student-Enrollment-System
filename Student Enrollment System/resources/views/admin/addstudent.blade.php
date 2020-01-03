@extends('layout')

@section('content')
    
            <div class="col-12 col-lg-6 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title text-center text-info">Add Student</h1>

                        <p class="alert-success">
                            @php
                                $exception=Session::get('message');
                                if ($exception) 
                                {
                                    echo $exception;
                                    Session::put('message',null);
                                }
                            @endphp
                        </p>

                        <form class="forms-sample" action="{{URL::to('/save_student')}}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="student_name">Student Name</label>
                                    <input type="text" name="student_name"  class="form-control p-input" placeholder="Student Name">
                                </div>

                                <div class="form-group">
                                    <label for="student_roll">Student Roll</label>
                                    <input type="text" name="student_roll" id="student_roll" class="form-control p-input" placeholder="Student Roll">
                                </div>

                                <div class="form-group">
                                    <label for="student_fathername">Student Father</label>
                                    <input type="text" name="student_fathername" id="student_fathername" class="form-control p-input" placeholder="Student Father">
                                </div>

                                <div class="form-group">
                                    <label for="student_mothername">Student Mother</label>
                                    <input type="text" name="student_mothername" id="student_mothername" class="form-control p-input" placeholder="Student Mother">
                                </div>

                                <div class="form-group">
                                    <label for="student_email">Student Email</label>
                                    <input type="email" name="student_email" id="student_email" class="form-control p-input" placeholder="Student Email">
                                </div>

                                <div class="form-group">
                                    <label for="student_phone">Student Phone</label>
                                    <input type="text" name="student_phone" id="student_phone" class="form-control p-input" placeholder="Student Phone">
                                </div>

                                <div class="form-group">
                                    <label for="student_address">Student Address</label>
                                    <input type="text" name="student_address" id="student_address" class="form-control p-input" placeholder="Student Address">
                                </div>

                                <div class="form-group">
                                    <label for="student_password">Student Password</label>
                                    <input type="password" name="student_password" id="student_password" class="form-control p-input"   placeholder="Student Password">
                                </div>


                                <div class="form-group">
                                    <label>Upload Image</label>
                                    <div class="row">
                                    <div class="col-12">
                                        <label for="student_image" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Browse</label>
                                        <input type="file" name="student_image" class="form-control-file" id="student_image" aria-describedby="fileHelp">
                                    </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="student_department">Student Department</label>
                                    <select name="student_department" class="custom-select">
                                            <option selected>--Select Department--</option>
                                            <option value="1">CSE</option>
                                            <option value="2">BBA</option>
                                            <option value="3">ECE</option>
                                            <option value="4">EEE</option>
                                            <option value="5">MBA</option>
                                    </select>
                                </div>


                                <div class="form-group">
                                        <label for="student_admissionyear">Student Admission Year</label>
                                        <input type="date" name="student_admissionyear" id="student_admissionyear" class="form-control p-input"   placeholder="Student Admission Year">
                                    </div>
                                
                                <button type="submit" class="btn btn-success btn-block">Submit</button>
                            </form>
                    </div>
                </div>
            </div>




@endsection
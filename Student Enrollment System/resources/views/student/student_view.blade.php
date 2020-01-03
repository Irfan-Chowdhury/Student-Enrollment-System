

@extends('student_layout')

@section('content')

@php
    function convert_department($value)
    {
        $values=[
            1=>'CSE',
            2=>'BBA',
            3=>'ECE',
            4=>'EEE',
            5=>'MBA',
        ];
        
        return $values[$value];
    }
@endphp


        <div class="row user-profile">
          <div class="col-lg-12 side-left">
            <div class="card mb-6">
              <div class="card-body avatar">
                <h2 class="card-title">Info</h2>
                <img src="{{URL::to($student_description_profile->student_image)}}" alt="">
              <p class="name">{{$student_description_profile->student_name}}</p>
              <p class="designation">{{convert_department($student_description_profile->student_department)}}</p>
                <a class="email" href="#">{{$student_description_profile->student_email}}</a>
                <a class="number" href="#">{{$student_description_profile->student_phone}}</a>
              </div>
            </div>
            <div class="card mb-6">
              <div class="card-body overview">
                <h2 style="color:maroon; font-family:cursive;font-weight:bolder">International Islamic University Chittagong</h2>
                <div class="wrapper about-user">
                  <h2 class="card-title mt-4 mb-3">About</h2>
                  <p>The Total Information</p>
                </div>
                <div class="info-links">
                  <a class="website">
                    <i class="icon-globe icon">Father Name</i>
                    <span>{{$student_description_profile->student_fathername}}</span>
                  </a>
                  
                  <a class="social-link">
                    <i class="icon-social-facebook icon">Mother Name</i>
                    <span>{{$student_description_profile->student_mothername}}</span>
                  </a>

                  <a class="social-link">
                    <i class="icon-social-facebook icon">Mother Name</i>
                    <span>{{$student_description_profile->student_mothername}}</span>
                  </a>

                  <a class="social-link">
                    <i class="icon-social-facebook icon">Address</i>
                    <span>{{$student_description_profile->student_address}}</span>
                  </a>

                  <a class="social-link">
                    <i class="icon-social-facebook icon">Roll </i>
                    <span>{{$student_description_profile->student_roll}}</span>
                  </a>

                  <a class="social-link">
                    <i class="icon-social-facebook icon">Department </i>
                    <span>{{convert_department($student_description_profile->student_department)}}</span>
                  </a>

                  <a class="social-link">
                    <i class="icon-social-facebook icon">Admission Year</i>
                    <span>{{$student_description_profile->student_admissionyear}}</span>
                  </a>
                  
                </div>
              </div>
            </div>
          </div>
          
        </div>

@endsection
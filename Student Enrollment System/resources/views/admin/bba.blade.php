@extends('layout')

@section('content')
    
<div class="card">
    <div class="card-body">
      <h2 class="card-title">Data Table of BBA</h2>
      <div class="row">
        <div class="col-12">
          <table id="order-listing" class="table table-striped" style="width:100%;">
            <thead>
              <tr>
                  <th>Student Roll</th>
                  <th>Student Name</th>
                  <th>Phone</th>
                  <th>Image</th>
                  <th>Email</th>
                  <th>Address</th>
                  <th>Department</th>
                  <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($bba_student_info as $student)
                  <tr>
                      <td>{{$student->student_roll}}</td>
                      <td>{{$student->student_name}}</td>
                      <td>{{$student->student_phone}}</td>
                      <td><img src="{{URL::to($student->student_image)}}" height="50" width="60" alt=""></td>
                      <td>{{$student->student_email}}</td>
                      <td>{{$student->student_address}}</td>
                      {{-- <td>
                          @if ($student->student_department == 1 )
                              <span class="label label-success">{{'CSE'}}</span>
                          @elseif($student->student_department == 2)
                              <span class="label label-success">{{'BBA'}}</span>
                          @elseif($student->student_department == 3)
                              <span class="label label-success">{{'ECE'}}</span>
                          @elseif($student->student_department == 4)
                              <span class="label label-success">{{'EEE'}}</span>
                          @else
                          <span class="label label-success">{{'MBA'}}</span>

                          @endif
                      </td> --}}

                      <td>BBA</td>  <!-- we can write only BBA this line instead of condition-->
                      
                      <td>
                      <button class="btn btn-outline-primary">View</button>
                      <button class="btn btn-outline-success">Edit</button>
                      <button class="btn btn-outline-danger">Delete</button>
                      </td>
                  </tr>
              @endforeach  

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

@endsection
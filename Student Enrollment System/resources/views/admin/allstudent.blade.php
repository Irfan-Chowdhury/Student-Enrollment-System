@extends('layout')

@section('content')
    

    <div class="card">
      <div class="card-body">
        <h2 class="card-title">Data table</h2>

        <p class="alert-success">
            @php
                $exception=Session::get('update_msg');
                if ($exception) 
                {
                    echo $exception;
                    Session::put('update_msg',null);
                }
            @endphp
        </p>

        <div class="row">
          <div class="col-12">
          {{-- <form action="{{URL::to('/student_delete/{student_id}')}}"></form> --}}
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
                @foreach ($allstudent_info as $student)
                    <tr>
                        <td>{{$student->student_roll}}</td>
                        <td>{{$student->student_name}}</td>
                        <td>{{$student->student_phone}}</td>
                        <td><img src="{{URL::to($student->student_image)}}" height="50" width="60" alt=""></td>
                        <td>{{$student->student_email}}</td>
                        <td>{{$student->student_address}}</td>
                        <td>
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
                        </td>
                        
                        <td>
                        <a href="{{URL::to('/studentview/'.$student->student_id)}}"><button class="btn btn-outline-primary">View</button></a>
                        <a href="{{URL::to('/student_edit/'.$student->student_id)}}"><button class="btn btn-outline-success">Edit</button></a>
                        <a href="{{URL::to('/student_delete/'.$student->student_id)}}" onClick="return confirm('Are you to delete?')"><button class="btn btn-outline-danger">Delete</button></a>
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
@extends('layout')

@section('content')
    

    <div class="card">
      <div class="card-body">
        <h2 class="card-title">Data table</h2>

        {{-- <p class="alert-success">
            @php
                $exception=Session::get('update_msg');
                if ($exception) 
                {
                    echo $exception;
                    Session::put('update_msg',null);
                }
            @endphp
        </p> --}}

        <div class="row">
          <div class="col-12">
          {{-- <form action="{{URL::to('/teacher_delete/{teacher_id}')}}"></form> --}}
            <table id="order-listing" class="table table-striped" style="width:100%;">
              <thead>
                <tr>
                    <th>Teacher Name</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Department</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($allteacher_info as $teacher)
                    <tr>
                        <td>{{$teacher->teacher_name}}</td>
                        <td>{{$teacher->teacher_phone}}</td>
                        <td>{{$teacher->teacher_address}}</td>                       
                        <td>{{$teacher->teacher_department}}</td>                       
                        {{-- <td>
                            @if ($teacher->teacher_department == 1 )
                                <span class="label label-success">{{'CSE'}}</span>
                            @elseif($teacher->teacher_department == 2)
                                <span class="label label-success">{{'BBA'}}</span>
                            @elseif($teacher->teacher_department == 3)
                                <span class="label label-success">{{'ECE'}}</span>
                            @elseif($teacher->teacher_department == 4)
                                <span class="label label-success">{{'EEE'}}</span>
                            @else
                            <span class="label label-success">{{'MBA'}}</span>

                            @endif
                        </td> --}}

                        <td><img src="{{URL::to($teacher->teacher_image)}}" height="50" width="60" alt=""></td>

                        <td>
                        <a href="#"><button class="btn btn-outline-primary">View</button></a>
                        <a href="#"><button class="btn btn-outline-success">Edit</button></a>
                        <a href="#" onClick="return confirm('Are you to delete?')"><button class="btn btn-outline-danger">Delete</button></a>
                        {{-- <a href="{{URL::to('/teacher_delete/'.$teacher->teacher_id)}}" onClick="return confirm('Are you to delete?')"><button class="btn btn-outline-danger">Delete</button></a> --}}
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
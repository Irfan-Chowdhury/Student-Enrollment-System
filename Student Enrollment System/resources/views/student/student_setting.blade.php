@extends('student_layout')

@section('content')
    
            <div class="col-12 col-lg-6 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title text-center text-info">Upadte Your Profile</h1>

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

                        <form class="forms-sample" action="{{URL::to('/student_update')}}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                                

                                <div class="form-group">
                                    <label for="student_phone">Student Phone</label>
                                    <input type="text" name="student_phone" id="student_phone" class="form-control p-input" value="{{($student_description_profile->student_phone)}}">
                                </div>

                                <div class="form-group">
                                    <label for="student_address">Student Address</label>
                                <input type="text" name="student_address" id="student_address" class="form-control p-input" value="{{($student_description_profile->student_address)}}">
                                </div>

                                <div class="form-group">
                                    <label for="student_password">Student Password</label>
                                    <input type="password" name="student_password" id="student_password" class="form-control p-input"   value="{{($student_description_profile->student_password)}}">
                                </div>

                                
                                <button type="submit" class="btn btn-success btn-block">Submit</button>
                            </form>
                    </div>
                </div>
            </div>




@endsection
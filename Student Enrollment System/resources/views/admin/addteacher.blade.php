@extends('layout')

@section('content')
    
            <div class="col-12 col-lg-6 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title text-center text-info">Add Teacher</h1>

                        <p class="alert-success">
                            @php
                                $exception=Session::get('message_teacher');
                                if ($exception) 
                                {
                                    echo $exception;
                                    Session::put('message_teacher',null);
                                }
                            @endphp
                        </p>

                        <form class="forms-sample" action="{{URL::to('/save_teacher')}}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="teacher_name">Teacher Name</label>
                                    <input type="text" name="teacher_name"  class="form-control p-input" placeholder="Teacher Name">
                                </div>

                                <div class="form-group">
                                    <label for="teacher_phone">Teacher Phone</label>
                                    <input type="text" name="teacher_phone" id="teacher_phone" class="form-control p-input" placeholder="Student Roll">
                                </div>

                                <div class="form-group">
                                    <label for="teacher_address">Teacher Address</label>
                                    <input type="text" name="teacher_address" id="teacher_address" class="form-control p-input" placeholder="Student Father">
                                </div>

                                <div class="form-group">
                                    <label for="teacher_department">Teacher Department</label>
                                    <input type="text" name="teacher_department" id="teacher_department" class="form-control p-input" placeholder="Student Mother">
                                </div>

                                <div class="form-group">
                                    <label>Upload Image</label>
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="teacher_image" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Browse</label>
                                            <input type="file" name="teacher_image" class="form-control-file" id="teacher_image" aria-describedby="fileHelp">
                                        </div>
                                    </div>
                                </div>

                                                                
                                <button type="submit" class="btn btn-success btn-block">Submit</button>
                            </form>
                    </div>
                </div>
            </div>




@endsection
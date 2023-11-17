@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">
    	<div class="row">
            <div class="col-lg-12">
                <div class="card"><br></br>
                	<center>
                    <!-- <img class="rounded-circle avatar-xl" src="{{ asset('backend/assets/images/small/img-5.jpg')}}" alt="Card image cap"> -->
                </center>
                    <div class="card-body">
                        <form  method="POST" action="{{ route('update.password') }}" >
                            @csrf
                            <h4 class="card-title">Old Password</h4>

                            <!-- display validation -->
                            @if(count($errors))
                                @foreach ($errors->all() as $error)
                                <p class="alert alert-danger alert-dismissible fade show" role="alert">{{$error}}</p>

                                @endforeach

                                @endif
                            <p></p>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Current Password</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="password" name="oldpassword" id="oldpassword" value="">
                                </div>
                            </div>
                             <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">New Password</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="password" name="newpassword" id="newpassword" value="">
                                </div>
                            </div>
                             <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Confirm Password</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="password" name="confirm_password" id="confirm_password" value="">
                                </div>
                            </div>
                           <div class="form-group mb-3 text-center row mt-3 pt-1">
                            <div class="col-4">
                                <button class="btn btn-info btn-round w-100 waves-effect waves-light" type="submit">Change Password</button>
                            </div>
                        </div>
                        </form>
                        
                    </div>
                </div>
            </div>

        </div>
    </div>
 </div>


@endsection('admin')


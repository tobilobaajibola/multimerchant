@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<div class="page-content">
    <div class="container-fluid">
    	<div class="row">
            <div class="col-lg-12">
                <div class="card"><br></br>
                	<center>
                    <!-- <img class="rounded-circle avatar-xl" src="{{ asset('backend/assets/images/small/img-5.jpg')}}" alt="Card image cap"> -->
                </center>
                    <div class="card-body">
                        <form  method="POST" action="{{ route('store.profile') }}" enctype="multipart/form-data">
                            @csrf
                            <h4 class="card-title">Textual inputs</h4>
                            <p class="card-title-desc">Here are examples of <code class="highlighter-rouge">.form-control</code> applied to each
                                textual HTML5 <code class="highlighter-rouge">&lt;input&gt;</code> <code class="highlighter-rouge">type</code>.</p>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="name" id="example-text-input" value="{{ $editData->name }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">User Email</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="email" name="email" id="example-text-input" value="{{ $editData->email }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Username</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="username"  id="example-text-input" value="{{ $editData->username }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Profile Image</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" name="profile_image"  id="image" >
                                </div>
                            </div>
                             <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                     <img class="rounded avatar-lg" id="showImage" src="{{(!empty($editData->profile_image))? url('upload/admin_images/'.$editData->profile_image) : url('upload/admin_images/no_image.jpg')}}" alt="Card image cap">
                                </div>
                            </div>
                           <div class="form-group mb-3 text-center row mt-3 pt-1">
                            <div class="col-4">
                                <button class="btn btn-info btn-round w-100 waves-effect waves-light" type="submit">Update</button>
                            </div>
                        </div>
                        </form>
                        
                    </div>
                </div>
            </div>

        </div>
    </div>
 </div>
 <script type="text/javascript">
     $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
     });
 </script>

@endsection('admin')


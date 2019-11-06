@extends('layout.index')

@section('content')
<div class="main-content">
    <div class="container-fluid">
        
        <div class="page-header"> 
            <div class="header-sub-title">
                <nav class="breadcrumb breadcrumb-dash">
                    <a href="{{url('/home')}}" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Home</a>
                    <a class="breadcrumb-item" href="{{url('/')}}">Profile</a>
                    <span class="breadcrumb-item active">Change password</span>
                </nav>
            </div>
        </div> 

<div class="row justify-content-center">
    <div class="col-md-6">
        <h5>Horizontal Form</h5>
        <div class="p-h-10">
            <form class="m-t-15">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label control-label">User Name</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" placeholder="User Name">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label control-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" placeholder="Email">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label control-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" placeholder="Password">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="checkbox">
                                <input id="horizontalCheckbox1" type="checkbox">
                                <label for="horizontalCheckbox1">Remember Me</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-right">
                            <button class="btn btn-default">Reset</button>
                            <button class="btn btn-gradient-success">Submit</button>
                        </div>
                    </div> 
                </div>
            </form>
        </div>
    </div>
</div>

    </div>
</div>

@endsection
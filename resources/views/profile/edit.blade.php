@extends('layout.index')

@section('content')
<div class="main-content">
    <div class="container-fluid">
        <div class="page-header"> 
            <div class="header-sub-title">
                <nav class="breadcrumb breadcrumb-dash">
                    <a href="{{url('/home')}}" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Home</a>
                    <a class="breadcrumb-item" href="{{url('/profile')}}">Profile</a> 
                </nav>
            </div>
        </div>

        <div class="card">
            <div class="card-header border bottom">
                 <h3 class="text-center"><i class="mdi mdi-account-edit font-size-25"></i> Editer profile</h3>
            </div> 
            
            <form method="post" action="{{url('/profile/'.$user->id)}}" class="m-t-15" enctype="multipart/form-data">
            {{ csrf_field() }} 
            <input type="hidden" name="_method" value="PUT">
         
            <div class="card-body">
                <div class="row">
                    <div class="col-md-5"> 

                        <img class="img-fluid rounded-circle d-block mx-auto m-b-30" 
                               src="{{ asset('assets/images/others/profile.jpg') }}" alt="">                     
                        <div class="input-group">                       
                              <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile01"
                                  aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label" for="inputGroupFile01">Choisir image</label>
                              </div>
                        </div>
                    </div> 

                    <div class="col-md-7">
                        <div class="p-h-10">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label control-label text-sm-right">Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="name" value="{{ $user->name}}" class="form-control" placeholder="Name">
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label control-label text-sm-right">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" name="email" value="{{ $user->email}}" class="form-control" placeholder="Email" readonly="true">
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label control-label text-sm-right">Mobile</label>
                                    <div class="col-sm-9">
                                        <input type="number" name="tel" value="{{ $user->tel}}" class="form-control" placeholder="Téléphone">
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label control-label text-sm-right">Date naissance</label>
                                    <div class="col-sm-9">
                                        <input type="date" name="dateNaissance" value="{{ $user->dateNaissance}}" class="form-control">
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label control-label text-sm-right">Description</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3" placeholder="Description" >{{ $user->description}}</textarea>
                                    </div>
                                </div>
                            
                        </div>
                    </div>

                </div>
            </div>

            <div class="card-footer">
                <div class="text-sm-right">
                    <button class="btn btn-default">Reset</button>
                    <button class="btn btn-gradient-success">Submit</button>
                </div>
            </div>

        </form>
      </div>      
    </div>
</div>          
@endsection

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

<!-- Content Wrapper START -->
            <div class="card">
                    <div class="card-header border bottom">                                                    
                         <h3 class="text-center"><i class="mdi mdi-account font-size-25"></i>Profile</h3>
                    </div> 
                    <div class="container-fluid">
                        <div class="card">
                            <div class="card-body">
                                <div class="row m-v-30">
                                    <div class="col-sm-3">
                                        <img class="img-fluid rounded-circle d-block mx-auto m-b-30" src="assets/images/others/profile.jpg" alt="">
                                    </div>
                                    <div class="col-sm-4 text-center text-sm-left">
                                        <h2 class="m-b-5">{{ $user->name }}</h2>
                                        <p class="text-opacity m-b-20 font-size-13">{{ $user->email }}</p> 
                                        <div class="d-flex flex-row justify-content-center justify-content-sm-start">
                                            <div class="p-v-20 p-r-15 text-center">
                                                <span class="font-size-18 text-info text-semibold">18</span>
                                                <small class="d-block">Voyages</small>
                                            </div>
                                            <div class="p-v-20 p-h-15 text-center">
                                                <span class="font-size-18 text-info text-semibold">1,362</span>
                                                <small class="d-block">Réservations</small>
                                            </div>
                                            <div class="p-v-20 p-h-15 text-center">
                                                <span class="font-size-18 text-info text-semibold">362</span>
                                                <small class="d-block">Organisations</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <p class="text-dark font-size-13"><b>Follow Me On:</b></p>
                                        <ul class="list-inline">
                                            <li class="m-r-15">
                                                <a class="text-gray" href="{{ $user->url_instagram}}">
                                                    <i class="mdi mdi-instagram font-size-25"></i>
                                                </a>
                                            </li>
                                            <li class="m-r-15">
                                                <a class="text-gray" href="{{ $user->url_facebook}}">
                                                    <i class="mdi mdi-facebook font-size-25"></i>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="row">
                                            <div class="col-lg-9">
                                                <p class="text-dark font-size-13">
                                                <b>Description:</b>
                                                <br>{{ $user->description }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="card">
                                  <h4 class="card-header text-center" >Historiques</h4>    
                                    <div class="card-body">
                                        <ul class="list-media">
                                        @foreach($historiques as $historique)
                                            <li class="list-item">
                                                <div class="p-b-15">
                                                    <div class="media-img">
                                                        <img src="assets/images/avatars/thumb-2.jpg" alt="">
                                                    </div>
                                                    <div class="info">
                                                        <span class="title">{{ $historique->reservations->trajet}}</span>
                                                        <span class="sub-title">{{ $historique->reservations->date_voyage}}</span>
                                                    </div>
                                                </div>
                                            </li> 
                                        @endforeach
                                        </ul>  
                                    </div>
                                    <div class="border top p-v-15 p-h-20 text-center">
                                        <a href="#" class="text-semibold text-dark d-block">More...</a>
                                    </div>
                                </div> 
                            </div>
                            <div class="col-sm-9">
                                <div class="card">
                                    <div class="feed-header">
                                        <ul class="list-media">
                                            <li class="list-item">
                                                <div class="p-h-30 p-t-30">
                                                    <div class="media-img">
                                                        <img src="assets/images/avatars/thumb-1.jpg" alt="">
                                                    </div>
                                                    <div class="info">
                                                        <span class="title">Marshall Nichols</span>
                                                        <span class="sub-title">@marshallnichole</span>
                                                        <div class="float-item">
                                                            <span>2 min ago</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="p-30">
                                        <p>Remember, a Jedi can feel the Force flowing through him. You mean it controls your actions? Partially. But it also obeys your commands. Hokey religions and ancient weapons are no match for a good blaster at your side, kid. You don't believe in the Force, do you? Kid, I've flown from one side of this galaxy to the other.</p>
                                        <ul class="list-inline m-t-20 p-v-15">
                                            <li class="m-r-25">
                                                <a href="#" class="text-gray font-size-16 ">
                                                    <i class="ti-heart text-danger p-r-5"></i>
                                                    <span>168</span>
                                                </a>
                                            </li>
                                            <li class="m-r-20">
                                                <a href="#" class="text-gray font-size-16">
                                                    <i class="ti-comments text-success p-r-5"></i>
                                                    <span>18</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div> 
                            </div> 
                        </div>
                    </div>        
                </div>
                <!-- Content Wrapper END -->


  </div>
</div>
@endsection

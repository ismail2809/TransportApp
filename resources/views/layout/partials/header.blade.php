<!-- Header START -->
<div class="header navbar">
    <div class="header-container">
        <div class="nav-logo">
            <a href="index.html">
                <div class="logo logo-dark" style="background-image: url('{{asset('assets/images/logo/logo.png') }}')"></div>
                <div class="logo logo-white" style="background-image: url('{{asset('assets/images/logo/logo-white.png')}} ')"></div>
            </a>
        </div> 

        <ul class="nav-right"> 

            @guest
                <li>
                    <a class="btn btn-info" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li>
                        <a class="btn btn-info" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
            <li class="notifications dropdown dropdown-animated scale-left">
                <span class="counter">2</span>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="mdi mdi-bell-ring-outline"></i>
                </a>
                <ul class="dropdown-menu dropdown-lg p-v-0">
                    <li class="p-v-15 p-h-20 border bottom text-dark">
                        <h5 class="m-b-0">
                            <i class="mdi mdi-bell-ring-outline p-r-10"></i>
                            <span>Notifications</span>
                        </h5>
                    </li>
                    <li>
                        <ul class="list-media overflow-y-auto relative scrollable" style="max-height: 300px">
                            <li class="list-item border bottom">
                                <a href="javascript:void(0);" class="media-hover p-15">
                                    <div class="media-img">
                                        <div class="icon-avatar bg-primary">
                                            <i class="ti-settings"></i>
                                        </div>
                                    </div>
                                    <div class="info">
                                        <span class="title">
                                            System shutdown
                                        </span>
                                        <span class="sub-title">8 min ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="list-item border bottom">
                                <a href="javascript:void(0);" class="media-hover p-15">
                                    <div class="media-img">
                                        <div class="icon-avatar bg-success">
                                            <i class="ti-user"></i>
                                        </div>
                                    </div>
                                    <div class="info">
                                        <span class="title">
                                            New User Registered
                                        </span>
                                        <span class="sub-title">12 min ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="list-item border bottom">
                                <a href="javascript:void(0);" class="media-hover p-15">
                                    <div class="media-img">
                                        <div class="icon-avatar bg-warning">
                                            <i class="ti-file"></i>
                                        </div>
                                    </div>
                                    <div class="info">
                                        <span class="title">
                                            New Attacthemnet
                                        </span>
                                        <span class="sub-title">12 min ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="list-item border bottom">
                                <a href="javascript:void(0);" class="media-hover p-15">
                                    <div class="media-img">
                                        <div class="icon-avatar bg-info">
                                            <i class="ti-shopping-cart"></i>
                                        </div>
                                    </div>
                                    <div class="info">
                                        <span class="title">
                                            New Order Received
                                        </span>
                                        <span class="sub-title">12 min ago</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="p-v-15 p-h-20 text-center">
                        <span>
                            <a href="#" class="text-gray">Check all notifications <i class="ei-right-chevron p-l-5 font-size-10"></i></a>
                        </span>
                    </li>
                </ul>
            </li>
              
            <li class="user-profile dropdown dropdown-animated scale-left">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img class="profile-img img-fluid" src="{{asset('assets/images/avatars/thumb-13.jpg') }}" alt="">
                </a>
                <ul class="dropdown-menu dropdown-md p-v-0">
                    <li>
                        <ul class="list-media">
                            <li class="list-item p-15">
                                <div class="media-img">
                                    <img src="{{asset('assets/images/avatars/thumb-13.jpg') }}" alt="">
                                </div>
                                <div class="info">
                                    <span class="title text-semibold">{{Auth::user()->name}}</span>
                                    <span class="sub-title">{{Auth::user()->email}}</span>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li role="separator" class="divider"></li>
                                                  
                    <li>
                        <a href="{{url('/profile')}}">
                            <i class="ti-user p-r-10"></i>
                            <span>Profile</span>
                        </a>
                    </li> 
                    <li>
                        <a href="{{url('/profile/'.Auth::user()->id.'/edit')}}">
                            <i class="ti-settings p-r-10"></i>
                            <span>Editer</span>
                        </a>
                    </li>
                    <li>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            <i class="ti-power-off p-r-10"></i>
                            <span>Se déconnecter</span>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form> 
                    </li>
                </ul>
            </li>                         
            @endguest 
        </ul>
    </div>
</div>
<!-- Header END -->
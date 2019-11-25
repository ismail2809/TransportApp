@extends('layout.index')

@section('content')
<div class="main-content">
    <div class="container-fluid">
        <div class="page-header"> 
            <div class="header-sub-title">
                <nav class="breadcrumb breadcrumb-dash">
                    <a href="{{url('/home')}}" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Home</a>
                    <a class="breadcrumb-item" href="{{url('/dashboard')}}">Dashboard</a> 
                </nav>
            </div>
        </div>
        <div class="row">
                            <div class="col-sm-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="media justify-content-between">
                                            <div>
                                                <p class="">Total Revenue</p>
                                                <h2 class="font-size-28 font-weight-light">$ {{$reservation_prix}}</h2>                                                
                                            </div>
                                            <div class="align-self-end">
                                                <i class="ti-credit-card font-size-70 text-success opacity-01"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="media justify-content-between">
                                            <div>
                                                <p class="">Réservations</p>
                                                <h2 class="font-size-28 font-weight-light">{{$reservations}}</h2>                                                
                                            </div>
                                            <div class="align-self-end">
                                                <i class="ti-pie-chart font-size-70 text-info opacity-01"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="media justify-content-between">
                                            <div>
                                                <p class="">Voyageurs</p>
                                                <h2 class="font-size-28 font-weight-light">{{$voyages}}</h2>                                              
                                            </div>
                                            <div class="align-self-end">
                                                <i class="ti-bar-chart font-size-70 text-danger opacity-01"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="media justify-content-between">
                                            <div>
                                                <p class="">Utilisateurs</p>
                                                <h2 class="font-size-28 font-weight-light">{{$users}}</h2>                                          
                                            </div>
                                            <div class="align-self-end">
                                                <i class="ti-user font-size-70 text-primary opacity-01"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Recent Order</h4>
                        <div class="card-toolbar">
                            <ul>
                                <li>
                                    <a class="text-gray" href="javascript:void(0)">
                                        <i class="mdi mdi-dots-vertical font-size-20"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="table-overflow">
                        <table class="table table-lg">
                            <thead>
                                <tr>
                                    <td class="text-dark text-semibold">Utilisateur</td>
                                    <td class="text-dark text-semibold">Trajet</td>
                                    <td class="text-dark text-semibold">Place réservé</td>
                                    <td class="text-dark text-semibold">Place disponible</td> 
                                    <td class="text-dark text-semibold">Prix</td>
                                    <td class="text-dark text-semibold">Date</td>
                                    <td class="text-dark text-semibold">Status</td>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($all_reservations as $reservation)
                            <tr>
                                <td>
                                    <div class="list-media">
                                        <div class="list-item">
                                            <div class="media-img">
                                                <img src="assets/images/avatars/thumb-1.jpg" alt="">
                                            </div>
                                            <div class="info">
                                                <span class="title p-t-10 text-semibold">{{$reservation->users->name}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>{{$reservation->reservations->trajet}}</td>
                                <td>{{$reservation->nbr_personnes}}</td>
                                <td>{{$reservation->reservations->nbr_place_disponible}}</td> 
                                <td>{{$reservation->reservations->prix}}</td>
                                <td>{{$reservation->reservations->date_voyage}}</td>
                                @if($reservation->reservations->nbr_place_disponible == $reservation->nbr_personnes)
                                <td>
                                    <span class="status danger"></span>
                                    <span class="text-danger text-semibold m-l-5">Complet</span>
                                </td>
                                @else
                                <td>
                                    <span class="status success"></span>
                                    <span class="text-success text-semibold m-l-5">Disponible</span>
                                </td>
                                @endif
                            </tr> 
                            @endforeach
                            </tbody>
                        </table>
                    </div>    
                </div>
            </div> 
        </div>
    </div>
</div>
<!-- Content Wrapper END -->

@endsection
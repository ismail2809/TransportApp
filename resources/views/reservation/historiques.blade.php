@extends('layout.index')

@section('content')
<div class="main-content">
    <div class="container-fluid">
        <div class="page-header"> 
            <div class="header-sub-title">
                <nav class="breadcrumb breadcrumb-dash">
                    <a href="{{url('/home')}}" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Home</a>
                    <a class="breadcrumb-item" href="{{url('/reservations')}}">Réservations</a>
                    <span class="breadcrumb-item active">Historiques</span>
                </nav>
            </div>
        </div>       
        <div class="card">
            <div class="card-body m-v-40">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-2">
                                <h5><b>Historiques </b></h5>
                                <ul class="list-unstyled m-t-30 nav d-block" role="tablist">
                                    <li class="m-b-20 d-block">
                                        <a href="#faq-tab-1" class="text-semibold font-size-16 text-gray active" role="tab" data-toggle="tab">Mes réservations</a>
                                    </li>
                                    <li class="m-b-20 d-block">
                                        <a href="#faq-tab-2" class="text-semibold font-size-16 text-gray" role="tab" data-toggle="tab">Mes Organisations</a>
                                    </li>
                                    <li class="m-b-20 d-block">
                                        <a href="#faq-tab-3" class="text-semibold font-size-16 text-gray" role="tab" data-toggle="tab"></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-10">
                                <div class="table-overflow">
                                    <table id="dt-opt" class="table table-hover table-xl">
                                        <thead>
                                            <tr> 
                                                <th style="color: red;text-align:center">User</th>
                                                <th style="color: red;text-align:center">transport</th>
                                                <th style="color: red;text-align:center">trajet</th>
                                                <th style="color: red;text-align:center">nbr_place_disponible</th>
                                                <th style="color: red;text-align:center">date_voyage</th>
                                                <th style="color: red;text-align:center">prix</th>    
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($reservations as $reservation)
                                            <tr> 
                                                <td style="text-align:center">
                                                    <div class="list-media">
                                                        <div class="list-item"> 
                                                            <div class="info">
                                                                <span class="title">{{ $reservation->users->name}}</span> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td style="text-align:center">{{ $reservation->transports->name}}</td>
                                                <td style="text-align:center">{{ $reservation->trajet}}</td>
                                                <td style="text-align:center">{{ $reservation->nbr_place_disponible}}</td>
                                                <td style="text-align:center">{{ \Carbon\Carbon::parse($reservation->date_voyage)->format('d/m/Y h:m')}}</td>
                                                <td style="text-align:center"> $ {{ $reservation->prix}}.00</td>  
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
        </div>
    </div>
</div>

@endsection

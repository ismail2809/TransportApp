@extends('layout.index')

@section('content')

    <!-- Content Wrapper START -->
        <div class="main-content">
            <div class="container-fluid">
                <div class="page-header">
                    <h2 class="header-title">Liste des réservations</h2>
                    <div class="header-sub-title">
                        <nav class="breadcrumb breadcrumb-dash">
                            <a href="#" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Home</a>
                            <a class="breadcrumb-item" href="#">réservations</a>
                            <span class="breadcrumb-item active">Listes</span>
                        </nav>
                    </div>
                </div>  
                <div class="card">
                    <div class="card-body">
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
                                        <th style="color: red;text-align:center"></th>
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
                                        <td class="text-center font-size-18">
                                            <a href="#" class="text-gray m-r-15"><i class="ti-pencil"></i></a>
                                            <a href="#" class="text-gray"><i class="ti-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div> 
                    </div>       
                </div>   
            </div>
        </div>
    <!-- Content Wrapper END -->
 

@endsection
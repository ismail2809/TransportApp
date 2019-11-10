@extends('layout.index')

@section('content')

    <!-- Content Wrapper START -->
        <div class="main-content">
            <div class="container-fluid">
                <div class="page-header">
                    <h2 class="header-title">Liste des voyageurs</h2>
                    <div class="header-sub-title">
                        <nav class="breadcrumb breadcrumb-dash">
                            <a href="#" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Home</a>
                            <a class="breadcrumb-item" href="#">voyageurs</a>
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
                                        <th style="color: red;text-align:center">Transport</th>
                                        <th style="color: red;text-align:center">Trajet</th>
                                        <th style="color: red;text-align:center">Nombre de voyageurs</th>
                                        <th style="color: red;text-align:center">Date voyage</th>
                                        <th style="color: red;text-align:center">Prix</th>   
                                        <th style="color: red;text-align:center"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($voyages as $voyage)
                                    <tr> 
                                        <td style="text-align:center">
                                            <div class="list-media">
                                                <div class="list-item"> 
                                                    <div class="info">
                                                        <span class="title">{{ $voyage->users->name}}</span> 
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td style="text-align:center">{{ $voyage->reservations->transports->name}}</td>
                                        <td style="text-align:center">{{ $voyage->reservations->trajet}}</td>
                                        <td style="text-align:center">{{ $voyage->reservations->nbr_place_disponible}}</td>
                                        <td style="text-align:center">{{ \Carbon\Carbon::parse($voyage->reservations->date_voyage)->format('d/m/Y h:m')}}</td>
                                        <td style="text-align:center"> {{ $voyage->reservations->prix}}.00 dhs</td>  
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
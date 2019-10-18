@extends('layout.index')

@section('content')
<div class="main-content">
    <div class="container-fluid">
        <div class="page-header"> 
            <div class="header-sub-title">
                <nav class="breadcrumb breadcrumb-dash">
                    <a href="{{url('/home')}}" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Home</a>
                    <a class="breadcrumb-item" href="{{url('/voyages')}}">Voyages</a>
                    <span class="breadcrumb-item active">Détail</span>
                </nav>
            </div>
        </div> 
        @if($reservation->nbr_place_disponible == $voyages)
        
        <div class="row  justify-content-center">
          <div class="col-md-8">
              <div class="card bg-gradient-info" style="border-bottom-right-radius: 5%; border-bottom-left-radius: 5%">
                   <img src="{{asset('assets/images/logo/complet.jpg') }}" class="card-img-top" height="250px">
      
                  <div class="card-body">
                      <h4 class="card-title">
                          <a href="{{ url('reservation/détail/'.$reservation->id )}}" style="color: white">
                          <b>Trajet :</b> {{ $reservation->trajet}}</a> 
                          <br>
                          <span class="text-right"><b>Date :</b>
                          {{ \Carbon\Carbon::parse($reservation->date_voyage)->format('d/m/Y h:m')}} </span>  
                      </h4>
                      <h5><b>Description :</b></h5>       
                      <p>{{ $reservation->description}}</p>      
                  </div>

              </div>
          </div>
        </div>
        @else
        <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card" style="border-bottom-right-radius: 5%; border-bottom-left-radius: 5%">

                <form action="{{ route('voyage')}}" method="post">      
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="{{ url('reservation/détail/'.$reservation->id )}}" style="color: white">
                            <b>Trajet :</b> {{ $reservation->trajet}}</a> 
                            <br>
                            <span class="text-right"><b>Date :</b>
                            {{ \Carbon\Carbon::parse($reservation->date_voyage)->format('d/m/Y h:m')}} </span>  
                        </h4>
                        <h5><b>Description :</b></h5>       
                        <p>{{ $reservation->description}}</p>                                          
                            @csrf
                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                            <input type="hidden" name="reservation_id" value="{{ $reservation->id }}"> 
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="mdi mdi-account-outline"></i></span>
                            </div>
                            <input type="number" class="form-control" name="nbr_personnes" min="1" placeholder="Nombre de places">
                        </div>
                    </div>
                    <div class="card-footer"> 
                        <div class="text-right">
                            <button type="submit" class="btn btn-gradient-danger">Réservé</button>
                        </div>
                    </div> 
                </form>
              </div>
            </div>
          </div> 
        @endif
  </div>
</div>
@endsection

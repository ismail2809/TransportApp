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
        
        <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card" style="border-bottom-right-radius: 5%; border-bottom-left-radius: 5%">
                  <div class="card-header">
                     <img src="{{asset('assets/images/logo/complet.jpg') }}" class="card-img-top" height="250px">
                  </div>      
                  <div class="card-body">
                  <h1>{{ $reservation->user_id}}</h1>
                      <h3 class="alert alert-float">
                         Départ <b>{{ \Carbon\Carbon::parse($reservation->date_voyage)->format('h:m d/m/Y')}} </b>
                      </h3> 
                      <h3 class="card-title">
                          <b><i class="fa fa-bus" aria-hidden="true"></i> {{ $reservation->trajet}}</b>                        
                      </h3>
                      <h5>Description</h5>       
                      <p>{{ $reservation->description}}</p> 
                      <hr>
                      <div class="row">
                          <div class="col-md-3">
                              <h4> Bus complets </h4>
                          </div>
                           <div class="col-md-2 offset-7">
                              <h4>{{ $reservation->prix}} dhs </h4>
                              <p>Par place</p>
                          </div>                                  
                      </div> 
                  </div> 
              </div>
            </div>
        @endif 
        @if($reservation->nbr_place_disponible > $voyages)
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="card" style="border-bottom-right-radius: 5%; border-bottom-left-radius: 5%">
                  <div class="card-header">
                     <img src="{{asset('assets/images/logo/bus.png') }}" class="card-img-top" height="250px">
                  </div>                              
                  <div class="card-body">
                      <form action="{{ route('voyage')}}" method="post">
                            <h3 class="alert alert-float">
                               Départ <b>{{ \Carbon\Carbon::parse($reservation->date_voyage)->format('h:m d/m/Y')}} </b>
                            </h3> 
                            <h3 class="card-title">
                                <b><i class="fa fa-bus" aria-hidden="true"></i> {{ $reservation->trajet}}</b>                 
                            </h3>
                            <h5>Description</h5>       
                            <p>{{ $reservation->description}}</p> 
                            <div class="row">
                              <div class="col-md-8">                                         
                                  @csrf
                                  <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                  <input type="hidden" name="reservation_id" value="{{ $reservation->id }}"> 
                                  <div class="input-group">
                                      <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="mdi mdi-account-outline"></i></span>
                                      </div>
                                      <input type="number" class="form-control" name="nbr_personnes" min="1" max="{{ $place_reste}}" placeholder="Nombre de places que vous souhaitez réserver" required="true">
                                  </div>
                              </div>                                  
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-4">
                                    <h4> {{ $place_reste}} places restantes </h4>
                                </div>
                                 <div class="col-md-2 offset-6">
                                    <h4>{{ $reservation->prix}} dhs </h4>
                                    <p>Par place</p>
                                </div>                                  
                            </div> 
                            <div class="card-footer"> 
                              <div class="text-right">
                                  <button type="submit" class="btn btn-gradient-danger btn-rounded btn-float">Réservé</button>
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

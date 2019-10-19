@extends('layout.index')

@section('content') 
<!-- Content Wrapper START -->
<div class="main-content">
<div class="container-fluid">
     <div class="page-header"> 
            <div class="header-sub-title">
                <nav class="breadcrumb breadcrumb-dash">
                    <a href="{{url('/home')}}" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Home</a>                    
                    <span class="breadcrumb-item active">Voyages</span>
                </nav>
            </div>
    </div>
  @foreach($reservations as $reservation )
    <div class="row  justify-content-center">
         <div class="col-md-8">
              <div class="card" style="border-bottom-right-radius: 5%; border-bottom-left-radius: 5%">
                  <div class="card-header">
                     <img src="{{asset('assets/images/logo/bus.png') }}" class="card-img-top" height="250px">
                  </div>      
                  <div class="card-body">
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
                      <div class="card-footer text-right">
                          <a href="{{ url('reservation/détail/'.$reservation->id )}}" class="btn btn-success">
                            Réservé ta place
                          </a>
                      </div>
                  </div> 
              </div>
        </div>
    </div>      
@endforeach

</div>
</div>
<!-- Content Wrapper END -->
@endsection

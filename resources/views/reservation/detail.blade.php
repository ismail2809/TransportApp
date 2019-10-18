@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                  <img src="..." class="card-img-top" alt="...">
                  @if($reservation->nbr_place_disponible == $voyages)
                  
                  <div class="card-body">
                  <h2 style="color: red">Complet </h2>
                    <h5 class="card-title">Trajet: {{ $reservation->trajet }} | Transport: {{ $reservation->transport_id }}</h5>
                    <p class="card-text">Date: {{ $reservation->date_voyage }} | Prix: {{ $reservation->prix }}</p>
                    <p class="card-text">Description: {{ $reservation->description }}</p> 
                  </div>
                  @else
                  <div class="card-body">
                    <h5 class="card-title">Trajet: {{ $reservation->trajet }} | Transport: {{ $reservation->transport_id }}</h5>
                    <p class="card-text">Date: {{ $reservation->date_voyage }} | Prix: {{ $reservation->prix }}</p>
                    <p class="card-text">Description: {{ $reservation->description }}</p>
                    <form action="{{ route('voyage')}}" method="post">                                
                        @csrf
                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                        <input type="hidden" name="reservation_id" value="{{ $reservation->id }}"> 
                        <input type="number" name="nbr_personnes" min="1" placeholder="Nombre de places">
                        <input type="submit" class="btn btn-primary" value="Réservé">                        
                    </form>
                  </div>
                  @endif
            </div>
        </div>
    </div>
</div>
@endsection

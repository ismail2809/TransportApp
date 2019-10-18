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

      	<form action="{{ route('reservation') }}" method="POST">
          @csrf 
           <input type="hidden" name="user_id" value="{{Auth::user()->id}}">

          	<div class="form-group">
          		<label for="input1">Trajet</label>
          		<input type="text" class="form-control" name="trajet" id="input1" placeholder="Trajet ex: Casablanca - Rabat">
          	</div>

          	<div class="form-group">
          		<label for="input2">Place disponible</label>
          		<input type="numero" class="form-control" name="nbr_place_disponible" id="input2" placeholder="Place disponible">
          	</div>

          	<div class="form-group">
          		<label for="input4">Date voyage</label>
          		<input type="datetime-local" class="form-control" name="date_voyage" id="input4">
          	</div>

            <div class="form-group">
              <label for="input5">Prix</label>
              <input type="numero" class="form-control" name="prix" id="input5" placeholder="Prix">
            </div>


            <div class="form-group">
              <label for="exampleFormControlTextarea1">Description</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="2" placeholder="Description"></textarea>
            </div>

            <div class="form-group">
              <label for="exampleFormControlSelect2">Transport</label>
              <select name="transport_id" class="form-control" id="exampleFormControlSelect2">
                <option>Choisir Transport</option>
                @foreach($transports as $transport)
                <option value="{{ $transport->id }}">{{ $transport->name }}</option>
                @endforeach
              </select>
            </div>
  
            <div class="form-group text-right">
              <button type="submit" class="btn btn-success">Créer</button>
            </div> 

      </form>
  </div>
</div>
@endsection
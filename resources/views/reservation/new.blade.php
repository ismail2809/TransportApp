<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form action="{{ route('reservation') }}" method="POST">
    @csrf 
    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
	<div class="form-group">
		<label for="input1">Trajet</label>
		<input type="text" class="form-control" name="trajet" id="input1" placeholder="Trajet ex: Casablanca - Rabat">
	</div>
	<div class="form-group">
		<label for="input2">Place disponible</label>
		<input type="numero" class="form-control" name="nbr_place_disponible" id="input2">
	</div>
	<div class="form-group">
		<label for="input4">Date voyage</label>
		<input type="datetime-local" class="form-control" name="date_voyage" id="input4">
	</div>

  <div class="form-group">
    <label for="input5">Prix</label>
    <input type="numero" class="form-control" name="prix" id="input5">
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect2">Transport</label>
    <select name="transport_id" class="form-control" id="exampleFormControlSelect2">
      <option>Choisir Transport</option>
      @foreach($transports as $transport)
      <option value="{{ $transport->id }}">{{ $transport->name }}</option>
      @endforeach
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3"></textarea>
  </div>
                      <input type="submit" value="Envoyer">

</form>
</body>
</html>
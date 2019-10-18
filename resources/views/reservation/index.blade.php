@extends('layouts.app')

@section('content') 
<!-- Content Wrapper START -->
<div class="main-content">
    <div class="container-fluid">
        <div class="page-header">
            <h2 class="header-title">Cards</h2>
            <div class="header-sub-title">
                <nav class="breadcrumb breadcrumb-dash">
                    <a href="#" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Home</a>
                    <a class="breadcrumb-item" href="#">UI Elements</a>
                    <span class="breadcrumb-item active">Cards</span>
                </nav>
            </div>
        </div>
        <div class="row">
           
            <div class="col-md-4">
                <div class="card bg-gradient-info">
                    <div class="card-body">
                        <h4 class="card-title">Card With Gradient Background</h4>
                         @foreach($reservations as $res) 
                        <div class="alert alert-success">
                            <a href="{{ url('reservation/détail/'.$res->id )}}">Dashboard</a>
                                <form action="{{ route('voyage')}}" method="post">
                                
                                    @csrf
                                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                    <input type="hidden" name="reservation_id" value="{{ $res->id }}"> 
                                    <input type="number" name="nbr_personnes" min="1" placeholder="Nombre de places">
                                    <input type="submit" value="Réservé">

                                </form>
                        </div>
                        @endforeach
                        </div>
                    <div class="card-footer">
                        <div class="text-right">
                            <button class="btn btn-gradient-success">Accept</button>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>
<!-- Content Wrapper END -->
@endsection

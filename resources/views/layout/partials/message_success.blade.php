@extends('layout.index')

@section('content')
<div class="main-content">
    <div class="container-fluid">
        <div class="page-header"> 
            <div class="header-sub-title">
                <nav class="breadcrumb breadcrumb-dash">
                    <a href="{{url('/home')}}" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Home</a>
                </nav>
            </div>
        </div> 

		<div class="alert alert-success-gradient">
		    <div class="d-flex align-items-center justify-content-start">
		        <span class="alert-icon">
		            <i class="mdi mdi-check-circle-outline"></i>
		        </span>
		        <span><strong>C'est Fait !</strong> Votre Réservation a été faites avec success .</span>
		    </div>
		</div>
 	</div>
 </div>
@endsection

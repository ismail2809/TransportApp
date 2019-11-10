@extends('layout.index')

@section('content')
<div class="main-content">
    <div class="container-fluid">
        
        <div class="page-header"> 
            <div class="header-sub-title">
                <nav class="breadcrumb breadcrumb-dash">
                    <a href="{{url('/home')}}" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Home</a>
                    <a class="breadcrumb-item" href="{{url('/')}}">Profile</a>
                    <span class="breadcrumb-item active">Change password</span>
                </nav>
            </div>
        </div> 

    <!-- Content Wrapper START -->
        <div class="main-content">
            <div class="container-fluid">
                <div class="page-header">
                    <h2 class="header-title">Data Table</h2>
                    <div class="header-sub-title">
                        <nav class="breadcrumb breadcrumb-dash">
                            <a href="#" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Home</a>
                            <a class="breadcrumb-item" href="#">Tables</a>
                            <span class="breadcrumb-item active">Data Table</span>
                        </nav>
                    </div>
                </div>  
                <div class="card">
                    <div class="card-body">
                        <div class="table-overflow">
                            <table id="dt-opt" class="table table-hover table-xl">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="checkbox p-0">
                                                <input id="selectable1" type="checkbox" class="checkAll" name="checkAll">
                                                <label for="selectable1"></label>
                                            </div>
                                        </th>
                                        <th>Name</th>
                                        <th>Status</th>
                                        <th>Bill Code</th>
                                        <th>Date</th>
                                        <th>Amount</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="checkbox">
                                                <input id="selectable2" type="checkbox">
                                                <label for="selectable2"></label>
                                            </div> 
                                        </td>
                                        <td>
                                            <div class="list-media">
                                                <div class="list-item">
                                                    <div class="media-img">
                                                        <img src="assets/images/avatars/thumb-1.jpg" alt="">
                                                    </div>
                                                    <div class="info">
                                                        <span class="title">Marshall Nichols</span>
                                                        <span class="sub-title">ID 870</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-pill badge-gradient-success">Actived</span></td>
                                        <td>#33667</td>
                                        <td>08 May 2018</td>
                                        <td> $168.00</td>
                                        <td class="text-center font-size-18">
                                            <a href="#" class="text-gray m-r-15"><i class="ti-pencil"></i></a>
                                            <a href="#" class="text-gray"><i class="ti-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkbox">
                                                <input id="selectable3" type="checkbox">
                                                <label for="selectable3"></label>
                                            </div> 
                                        </td>
                                        <td>
                                            <div class="list-media">
                                                <div class="list-item">
                                                    <div class="media-img">
                                                        <img src="assets/images/avatars/thumb-2.jpg" alt="">
                                                    </div>
                                                    <div class="info">
                                                        <span class="title">Susie Willis</span>
                                                        <span class="sub-title">ID 861</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-pill badge-gradient-success">Actived</span></td>
                                        <td>#33683</td>
                                        <td>05 May 2018</td>
                                        <td>$433.00</td>
                                        <td class="text-center font-size-18">
                                            <a href="#" class="text-gray m-r-15"><i class="ti-pencil"></i></a>
                                            <a href="#" class="text-gray"><i class="ti-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkbox">
                                                <input id="selectable4" type="checkbox">
                                                <label for="selectable4"></label>
                                            </div> 
                                        </td>
                                        <td>
                                            <div class="list-media">
                                                <div class="list-item">
                                                    <div class="media-img">
                                                        <img src="assets/images/avatars/thumb-3.jpg" alt="">
                                                    </div>
                                                    <div class="info">
                                                        <span class="title">Debra Stewart</span>
                                                        <span class="sub-title">ID 863</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-pill badge-warning">Pending</span></td>
                                        <td>#33668</td>
                                        <td>09 May 2018</td>
                                        <td>$2488.00</td>
                                        <td class="text-center font-size-18">
                                            <a href="#" class="text-gray m-r-15"><i class="ti-pencil"></i></a>
                                            <a href="#" class="text-gray"><i class="ti-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkbox">
                                                <input id="selectable5" type="checkbox">
                                                <label for="selectable5"></label>
                                            </div> 
                                        </td>
                                        <td>
                                            <div class="list-media">
                                                <div class="list-item">
                                                    <div class="media-img">
                                                        <img src="assets/images/avatars/thumb-4.jpg" alt="">
                                                    </div>
                                                    <div class="info">
                                                        <span class="title">Francisco Vasquez</span>
                                                        <span class="sub-title">ID 873</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-pill badge-gradient-success">Actived</span></td>
                                        <td>#33684</td>
                                        <td>16 May 2018</td>
                                        <td>$762.00</td>
                                        <td class="text-center font-size-18">
                                            <a href="#" class="text-gray m-r-15"><i class="ti-pencil"></i></a>
                                            <a href="#" class="text-gray"><i class="ti-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkbox">
                                                <input id="selectable6" type="checkbox">
                                                <label for="selectable6"></label>
                                            </div> 
                                        </td>
                                        <td>
                                            <div class="list-media">
                                                <div class="list-item">
                                                    <div class="media-img">
                                                        <img src="assets/images/avatars/thumb-5.jpg" alt="">
                                                    </div>
                                                    <div class="info">
                                                        <span class="title">Jane Hunt</span>
                                                        <span class="sub-title">ID 860</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-pill badge-warning">Pendding</span></td>
                                        <td>#33666</td>
                                        <td>18 May 2018</td>
                                        <td>$853.00</td>
                                        <td class="text-center font-size-18">
                                            <a href="#" class="text-gray m-r-15"><i class="ti-pencil"></i></a>
                                            <a href="#" class="text-gray"><i class="ti-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkbox">
                                                <input id="selectable7" type="checkbox">
                                                <label for="selectable7"></label>
                                            </div> 
                                        </td>
                                        <td>
                                            <div class="list-media">
                                                <div class="list-item">
                                                    <div class="media-img">
                                                        <img src="assets/images/avatars/thumb-6.jpg" alt="">
                                                    </div>
                                                    <div class="info">
                                                        <span class="title">Ava Alexander</span>
                                                        <span class="sub-title">ID 878</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-pill badge-gradient-danger">Rejected</span></td>
                                        <td>#33686</td>
                                        <td>08 May 2018</td>
                                        <td>$567.00</td>
                                        <td class="text-center font-size-18">
                                            <a href="#" class="text-gray m-r-15"><i class="ti-pencil"></i></a>
                                            <a href="#" class="text-gray"><i class="ti-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkbox">
                                                <input id="selectable8" type="checkbox">
                                                <label for="selectable8"></label>
                                            </div> 
                                        </td>
                                        <td>
                                            <div class="list-media">
                                                <div class="list-item">
                                                    <div class="media-img">
                                                        <img src="assets/images/avatars/thumb-7.jpg" alt="">
                                                    </div>
                                                    <div class="info">
                                                        <span class="title">Shane Ross</span>
                                                        <span class="sub-title">ID 870</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-pill badge-gradient-success">Actived</span></td>
                                        <td>#33683</td>
                                        <td>12 May 2018</td>
                                        <td>$463.00</td>
                                        <td class="text-center font-size-18">
                                            <a href="#" class="text-gray m-r-15"><i class="ti-pencil"></i></a>
                                            <a href="#" class="text-gray"><i class="ti-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkbox">
                                                <input id="selectable9" type="checkbox">
                                                <label for="selectable9"></label>
                                            </div> 
                                        </td>
                                        <td>
                                            <div class="list-media">
                                                <div class="list-item">
                                                    <div class="media-img">
                                                        <img src="assets/images/avatars/thumb-8.jpg" alt="">
                                                    </div>
                                                    <div class="info">
                                                        <span class="title">Erin Gonzales</span>
                                                        <span class="sub-title">ID 873</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-pill badge-gradient-success">Actived</span></td>
                                        <td>#33684</td>
                                        <td>16 May 2018</td>
                                        <td>$762.00</td>
                                        <td class="text-center font-size-18">
                                            <a href="#" class="text-gray m-r-15"><i class="ti-pencil"></i></a>
                                            <a href="#" class="text-gray"><i class="ti-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkbox">
                                                <input id="selectable10" type="checkbox">
                                                <label for="selectable10"></label>
                                            </div> 
                                        </td>
                                        <td>
                                            <div class="list-media">
                                                <div class="list-item">
                                                    <div class="media-img">
                                                        <img src="assets/images/avatars/thumb-9.jpg" alt="">
                                                    </div>
                                                    <div class="info">
                                                        <span class="title">Alan Mills</span>
                                                        <span class="sub-title">ID 877</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-pill badge-gradient-danger">Rejected</span></td>
                                        <td>#33685</td>
                                        <td>17 May 2018</td>
                                        <td>$654.00</td>
                                        <td class="text-center font-size-18">
                                            <a href="#" class="text-gray m-r-15"><i class="ti-pencil"></i></a>
                                            <a href="#" class="text-gray"><i class="ti-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkbox">
                                                <input id="selectable11" type="checkbox">
                                                <label for="selectable11"></label>
                                            </div> 
                                        </td>
                                        <td>
                                            <div class="list-media">
                                                <div class="list-item">
                                                    <div class="media-img">
                                                        <img src="assets/images/avatars/thumb-10.jpg" alt="">
                                                    </div>
                                                    <div class="info">
                                                        <span class="title">Nicole Wyne</span>
                                                        <span class="sub-title">ID 878</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-pill badge-gradient-success">Actived</span></td>
                                        <td>#33688</td>
                                        <td>20 May 2018</td>
                                        <td>$853.00</td>
                                        <td class="text-center font-size-18">
                                            <a href="#" class="text-gray m-r-15"><i class="ti-pencil"></i></a>
                                            <a href="#" class="text-gray"><i class="ti-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkbox">
                                                <input id="selectable12" type="checkbox">
                                                <label for="selectable12"></label>
                                            </div> 
                                        </td>
                                        <td>
                                            <div class="list-media">
                                                <div class="list-item">
                                                    <div class="media-img">
                                                        <img src="assets/images/avatars/thumb-11.jpg" alt="">
                                                    </div>
                                                    <div class="info">
                                                        <span class="title">Darryl Day</span>
                                                        <span class="sub-title">ID 879</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-pill badge-warning">Pending</span></td>
                                        <td>#33687</td>
                                        <td>17 May 2018</td>
                                        <td>$987.00</td>
                                        <td class="text-center font-size-18">
                                            <a href="#" class="text-gray m-r-15"><i class="ti-pencil"></i></a>
                                            <a href="#" class="text-gray"><i class="ti-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkbox">
                                                <input id="selectable13" type="checkbox">
                                                <label for="selectable13"></label>
                                            </div> 
                                        </td>
                                        <td>
                                            <div class="list-media">
                                                <div class="list-item">
                                                    <div class="media-img">
                                                        <img src="assets/images/avatars/thumb-12.jpg" alt="">
                                                    </div>
                                                    <div class="info">
                                                        <span class="title">Riley Newman</span>
                                                        <span class="sub-title">ID 880</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-pill badge-gradient-success">Actived</span></td>
                                        <td>#33689</td>
                                        <td>18 May 2018</td>
                                        <td>$853.00</td>
                                        <td class="text-center font-size-18">
                                            <a href="#" class="text-gray m-r-15"><i class="ti-pencil"></i></a>
                                            <a href="#" class="text-gray"><i class="ti-trash"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> 
                    </div>       
                </div>   
            </div>
        </div>
    <!-- Content Wrapper END -->
   

    </div>
</div>

@endsection
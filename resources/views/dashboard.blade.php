@extends('layout.index')

@section('content')
<div class="main-content">
    <div class="container-fluid">
        <div class="page-header"> 
            <div class="header-sub-title">
                <nav class="breadcrumb breadcrumb-dash">
                    <a href="{{url('/home')}}" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Home</a>
                    <a class="breadcrumb-item" href="{{url('/dashboard')}}">Dashboard</a> 
                </nav>
            </div>
        </div>
        <div class="row">
                            <div class="col-sm-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="media justify-content-between">
                                            <div>
                                                <p class="">Total Revenue</p>
                                                <h2 class="font-size-28 font-weight-light">$23,495</h2>
                                                <span class="text-semibold text-success font-size-15">
                                                    <i class="ti-arrow-up font-size-11"></i> 
                                                    <span>12%</span>
                                                </span>
                                            </div>
                                            <div class="align-self-end">
                                                <i class="ti-credit-card font-size-70 text-success opacity-01"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="media justify-content-between">
                                            <div>
                                                <p class="">Daily Product</p>
                                                <h2 class="font-size-28 font-weight-light">3,758</h2>
                                                <span class="text-semibold text-danger font-size-15">
                                                    <i class="ti-arrow-down font-size-11"></i> 
                                                    <span>7%</span>
                                                </span>
                                            </div>
                                            <div class="align-self-end">
                                                <i class="ti-pie-chart font-size-70 text-info opacity-01"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="media justify-content-between">
                                            <div>
                                                <p class="">Growth Rate</p>
                                                <h2 class="font-size-28 font-weight-light">28%</h2>
                                                <span class=" font-size-13 opacity-04">
                                                    from last month
                                                </span>
                                            </div>
                                            <div class="align-self-end">
                                                <i class="ti-bar-chart font-size-70 text-danger opacity-01"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="media justify-content-between">
                                            <div>
                                                <p class="">New Customers</p>
                                                <h2 class="font-size-28 font-weight-light">178</h2>
                                                <span class="text-semibold text-success font-size-15">
                                                    <i class="ti-arrow-up font-size-11"></i> 
                                                    <span>18%</span>
                                                </span>
                                            </div>
                                            <div class="align-self-end">
                                                <i class="ti-user font-size-70 text-primary opacity-01"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Recent Order</h4>
                        <div class="card-toolbar">
                            <ul>
                                <li>
                                    <a class="text-gray" href="javascript:void(0)">
                                        <i class="mdi mdi-dots-vertical font-size-20"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="table-overflow">
                        <table class="table table-lg">
                            <thead>
                                <tr>
                                    <td class="text-dark text-semibold">Customer</td>
                                    <td class="text-dark text-semibold">Order Date</td>
                                    <td class="text-dark text-semibold">Amount</td>
                                    <td class="text-dark text-semibold">Status</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="list-media">
                                            <div class="list-item">
                                                <div class="media-img">
                                                    <img src="assets/images/avatars/thumb-1.jpg" alt="">
                                                </div>
                                                <div class="info">
                                                    <span class="title p-t-10 text-semibold">Marshall Nichols</span>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>08 May 2018</td>
                                    <td> $168.00</td>
                                    <td>
                                        <span class="status success"></span>
                                        <span class="text-success text-semibold m-l-5">Active</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="list-media">
                                            <div class="list-item">
                                                <div class="media-img">
                                                    <img src="assets/images/avatars/thumb-2.jpg" alt="">
                                                </div>
                                                <div class="info">
                                                    <span class="title p-t-10 text-semibold">Susie Willis</span>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>05 May 2018</td>
                                    <td>$433.00</td>
                                    <td>
                                        <span class="status success"></span>
                                        <span class="text-success text-semibold m-l-5">Active</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="list-media">
                                            <div class="list-item">
                                                <div class="media-img">
                                                    <img src="assets/images/avatars/thumb-3.jpg" alt="">
                                                </div>
                                                <div class="info">
                                                    <span class="title p-t-10 text-semibold">Debra Stewart</span>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>09 May 2018</td>
                                    <td>$2488.00</td>
                                    <td>
                                        <span class="status warning"></span>
                                        <span class="text-warning text-semibold m-l-5">Inactive</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="list-media">
                                            <div class="list-item">
                                                <div class="media-img">
                                                    <img src="assets/images/avatars/thumb-8.jpg" alt="">
                                                </div>
                                                <div class="info">
                                                    <span class="title p-t-10 text-semibold">Erin Gonzales</span>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>16 May 2018</td>
                                    <td>$762.00</td>
                                    <td>
                                        <span class="status danger"></span>
                                        <span class="text-danger text-semibold m-l-5">Disabled</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="list-media">
                                            <div class="list-item">
                                                <div class="media-img">
                                                    <img src="assets/images/avatars/thumb-11.jpg" alt="">
                                                </div>
                                                <div class="info">
                                                    <span class="title p-t-10 text-semibold">Darryl Day</span>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>16 May 2018</td>
                                    <td>$762.00</td>
                                    <td>
                                        <span class="status success"></span>
                                        <span class="text-success text-semibold m-l-5">Active</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>    
                </div>
            </div> 
        </div>
    </div>
</div>
<!-- Content Wrapper END -->

@endsection
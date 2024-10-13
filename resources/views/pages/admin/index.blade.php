@extends('layouts.admin.main') 
@section('title', 'Admin Dashboard') 
@section('content') 
    <div class="main-content"> 
        <section class="section"> 
            <div class="section-header"> 
                <h1>Dashboard</h1> 
                <div class="section-header-breadcrumb"> 
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div> 
                </div> 
            </div> 
<<<<<<< HEAD

            <div class="row"> 
                <!-- Total Pengguna -->
=======
 
            <div class="row"> 
>>>>>>> 726849b5100a98f8d4a1dba7d931c8a697dfb10d
                <div class="col-lg-3 col-md-6 col-sm-6 col-12"> 
                    <div class="card card-statistic-1"> 
                        <div class="card-icon bg-primary"> 
                            <i class="far fa-user"></i> 
                        </div> 
                        <div class="card-wrap"> 
                            <div class="card-header"> 
                                <h4>Total Pengguna</h4> 
                            </div> 
                            <div class="card-body"> 
                                {{ $users }} 
                            </div> 
                        </div> 
                    </div> 
                </div> 
<<<<<<< HEAD

                <!-- Total Produk -->
=======
>>>>>>> 726849b5100a98f8d4a1dba7d931c8a697dfb10d
                <div class="col-lg-3 col-md-6 col-sm-6 col-12"> 
                    <div class="card card-statistic-1"> 
                        <div class="card-icon bg-danger"> 
                            <i class="far fa-newspaper"></i> 
                        </div> 
                        <div class="card-wrap"> 
                            <div class="card-header"> 
                                <h4>Total Produk</h4> 
                            </div> 
                            <div class="card-body"> 
                                {{ $products }} 
                            </div> 
                        </div> 
                    </div> 
                </div> 
<<<<<<< HEAD

                <!-- Total Distributor -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12"> 
                    <div class="card card-statistic-1"> 
                        <div class="card-icon bg-warning"> 
                            <i class="fas fa-truck"></i> 
=======
                <!-- Total Distributor -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12"> 
                    <div class="card card-statistic-1"> 
                        <div class="card-icon bg-danger"> 
                            <i class="far fa-newspaper"></i> 
>>>>>>> 726849b5100a98f8d4a1dba7d931c8a697dfb10d
                        </div> 
                        <div class="card-wrap"> 
                            <div class="card-header"> 
                                <h4>Total Distributor</h4> 
                            </div> 
                            <div class="card-body"> 
                                {{ $distributors }} 
                            </div> 
                        </div> 
                    </div> 
                </div> 
<<<<<<< HEAD

                <!-- Total Flash Sale -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12"> 
                    <div class="card card-statistic-1"> 
                        <div class="card-icon bg-success"> 
                            <i class="fas fa-bolt"></i> 
                        </div> 
                        <div class="card-wrap"> 
                            <div class="card-header"> 
                                <h4>Total Flash Sale</h4> 
                            </div> 
                            <div class="card-body"> 
                                {{ $flash_sales }} 
                            </div> 
                        </div> 
                    </div> 
                </div> 
            </div> 
        </section> 
    </div> 
@endsection
=======
            </div> 
        </section> 
    </div> 
@endsection
>>>>>>> 726849b5100a98f8d4a1dba7d931c8a697dfb10d

@extends('back.layout.template')
@section('title', 'Dashboard')
@section('content')

    <!-- content-->
    {{-- <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
      </div>

      <div class="row">
        <div class="col-3">
          <div class="card text-white bg-secondary mb-3" style="max-width: 100%;">
            <div class="card-header">
              <b>Total Packages</b>
            </div>
            <div class="card-body">
              <h5 class="card-title">{{ $total_package }}</h5>
              <p class="card-text">
                <a href="{{ url('admin/packages') }}" class="text-white">View</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card text-white bg-primary mb-3" style="max-width: 100%;">
          <div class="card-header"><b>Total Categories</b></div>
          <div class="card-body">
            <h5 class="card-title">{{ $total_categories }}</h5>
              <p class="card-text">
                <a href="{{ url('admin/categories') }}" class="text-white">View</a>
              </p>
          </div>
        </div>
        </div>
        <div class="col-3">
          <div class="card text-white bg-primary mb-3" style="max-width: 100%;">
          <div class="card-header"><b>Total Gallery</b></div>
          <div class="card-body">
            <h5 class="card-title">{{ $total_gallery }}</h5>
              <p class="card-text">
                <a href="{{ url('admin/galleries') }}" class="text-white">View</a>
              </p>
          </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card text-white bg-primary mb-3" style="max-width: 100%;">
          <div class="card-header"><b>Total User</b></div>
          <div class="card-body">
            <h5 class="card-title">{{ $total_gallery }}</h5>
              <p class="card-text">
                <a href="{{ url('admin/galleries') }}" class="text-white">View</a>
              </p>
          </div>
          </div>
        </div>
      </div>
      



    </main> --}}

    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <h4 class="card-title ms-3 mt-2 ">Total Package</h4>
                    <h5 class="card-body">{{ $total_package }}</h5>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{ url('admin/packages') }}">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-warning text-white mb-4">
                    <h4 class="card-title ms-3 mt-2 ">Total Categories</h4>
                    <h5 class="card-body">{{ $total_categories }}</h5>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{ url('admin/categories') }}">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-success text-white mb-4">
                    <h4 class="card-title ms-3 mt-2 ">Total Gallery</h4>
                    <h5 class="card-body">{{ $total_gallery }}</h5>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{ url('admin/galleries') }}">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-danger text-white mb-4">
                    <h4 class="card-title ms-3 mt-2 ">Total Users</h4>
                    <h5 class="card-body">{{ $total_users }}</h5>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{ url('admin/users') }}">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

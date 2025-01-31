@extends('back.layout.template')
@section('title', 'Detail Packages')

@section('content')

    <!-- content-->
    <main>
    <h1 class="mt-4">Package</h1>
    <ol class="breadcrumb mb-4 active">
        <li>Detail Package</li>
    </ol>

      <div class="mt-3">

        <table class="table table-striped table-bordered">
                <tr>
                    <th width="300px">Name</th>
                    <td>{{ $package->name }}</td>
                </tr>
                <tr>
                    <th>Category</th>
                    <td>{{ $package->Category->name }}</td>
                </tr>
                <tr>
                    <th>Price</th>
                    <td>{{ 'Rp ' . number_format($package->price, 0, ',', '.') }}</td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td>{!! $package->description !!}</td>
                </tr>
                <tr>
                    <th>Image</th>
                    <td>
                        <img src="{{ asset('storage/back/' . $package->image) }}" alt="Package Image" width="30%">
                    </td>
                </tr>
        </table>

        <div class="text-center">
            <a href="{{ url('admin/packages') }}" class="btn btn-secondary">Back</a>
        </div>
      </div>

    </main>
@endsection



@extends('back.layout.template')
@section('title', content: 'Users')
@section('content')

    <!-- content-->
    <main>
    <h1 class="mt-4">Users List</h1>
    <ol class="breadcrumb mb-4">
        <li>Users</li>
    </ol>

      <div class="mt-3">
        {{-- <div class="d-flex justify-content-end">
            <button class="btn btn-warning mb-2 " data-bs-toggle="modal" data-bs-target="#modalCreate">Add Users</button>
        </div> --}}

        @if ($errors->any())
        <div class="my-3">
            
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
            </div>
        </div>
        @endif

        @if (session('success'))
            <div class="my-3">
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            </div>
        @endif
        <table class="table table-striped table-bordered" id="dataTableUsers">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($users as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->role }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>
                            <div class="text-center">
                                @if (auth()->user()->id !== $item->id)
                                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalDelete{{ $item->id }}">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                @endif
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
      </div>

      @include('back.users.delete-modal')

    </main>
@endsection

@push('js')
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

    <script src="https://cdn.datatables.net/2.2.1/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.2.1/js/dataTables.bootstrap5.js"></script>

    <script>
        new DataTable('#dataTableUsers');
    </script>
@endpush
@extends('back.layout.template')
@section('title', content: 'Category')
@section('content')

    <!-- content-->
    <main>
        <h1 class="mt-4">Category</h1>
        <ol class="breadcrumb mb-4">
            <li>Category</li>
        </ol>

        <div class="mt-3">
            <div class="d-flex justify-content-end">
                <button class="btn btn-warning mb-2 " data-bs-toggle="modal" data-bs-target="#modalCreate">Add
                    Category</button>
            </div>

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
            <table class="table table-striped table-bordered" id="dataTableCategory">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Slug</th>
                        <th>Deskripsi</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($categories as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->slug }}</td>
                            <td style="max-width: 150px; overflow: hidden">{{ $item->description }}</td>
                            <td>
                                <div class="text-center">
                                    <button class="btn btn-secondary" data-bs-toggle="modal"
                                        data-bs-target="#modalUpdate{{ $item->id }}"><i
                                            class="fa-solid fa-pen-to-square"></i></button>
                                    <button class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#modalDelete{{ $item->id }}"><i
                                            class="fa-solid fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>



        @include('back.category.add-modal')
        @include('back.category.update-modal')
        @include('back.category.delete-modal')
    </main>
@endsection

@push('js')
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

    <script src="https://cdn.datatables.net/2.2.1/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.2.1/js/dataTables.bootstrap5.js"></script>

    <script>
        new DataTable('#dataTableCategory');
    </script>
@endpush

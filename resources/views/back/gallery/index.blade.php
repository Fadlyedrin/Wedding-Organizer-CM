@extends('back.layout.template')
@section('title', content: 'Gallery')

@section('content')
 <main>
    <h1 class="mt-4">Gallery</h1>
    <ol class="breadcrumb mb-4">
        <li>Gallery</li>
    </ol>
        <div class="mt-3">

            <div class="d-flex justify-content-end">
                <button class="btn btn-warning mb-2 " data-bs-toggle="modal" data-bs-target="#modalCreate">Add Gallery</button>
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
        <table class="table table-bordered table-striped" id="dataTableGallery">
        <thead>
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($galleries as $gallery)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $gallery->title }}</td>
                    <td>
                        <img src="{{ asset('storage/' . $gallery->image_path) }}" alt="{{ $gallery->title }}" style="width: 100px; height: auto;">
                    </td>
                    <td>
                         <div class="text-center d-flex justify-content-center  gap-3">
                            <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modalUpdateGallery{{ $gallery->id }}"><i class="fa-solid fa-pen-to-square"></i></button>
                            {{-- <form action="{{ route('galleries.destroy', $gallery->id) }}" method="POST" data-bs-target="#modalDelete{{ $gallery->id }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form> --}}
                            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalDelete{{ $gallery->id }}"><i class="fa-solid fa-trash"></i></button>
                         </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


        @include('back.gallery.create')
        @include('back.gallery.update')
        @include('back.gallery.delete')
    </main>
@endsection
@push('js')
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.2.1/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.2.1/js/dataTables.bootstrap5.js"></script>

    <script>
        new DataTable('#dataTableGallery');
    </script>
@endpush
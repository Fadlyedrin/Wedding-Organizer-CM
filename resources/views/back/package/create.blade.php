@extends('back.layout.template')
@section('title', 'Create Packages')

@section('content')

    <!-- content-->
    <main>
    <h1 class="mt-4">Package</h1>
    <ol class="breadcrumb mb-4 active">
        <li>Create Package</li>
    </ol>
      <div class="mt-4">

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

        <form action="{{ url('admin/packages') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="name" class="mb-3">Name</label>
                        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"  value="{{ old('name') }}">
                    </div>
                </div>

                <div class="col-6">
                    <div class="mb-3">
                        <label for="category_id" class="mb-3">Category</label>
                        <select name="category_id" id="category_id" class="form-control">
                            <option value="">Pilih Category</option>
                            @foreach ($categories as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>  
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="image">Image</label>
                        <input type="file" name="image" id="image" class="form-control">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="price">Price</label>
                        <input type="number" name="price" id="price" class="form-control">
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="description">Description</label>
                <textarea name="description" id="editor" class="form-control" cols="30" rows="10"></textarea>
            </div>

            <div class="float-end">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>

        </form>
      </div>

    </main>
@endsection

@push('js')
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>



    <script>
        ClassicEditor
            .create( document.querySelector( '#editor') )
            .catch( error => {
                console.error( error );
            })
    </script>
@endpush
@foreach ($galleries as $gallery)
    <div class="modal fade" id="modalUpdateGallery{{ $gallery->id }}" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="modalUpdateLabel{{ $gallery->id }}" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-warning text-white">
                    <h1 class="modal-title fs-5" id="modalUpdateLabel{{ $gallery->id }}">Update Gallery</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('admin/galleries/' . $gallery->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="title{{ $gallery->id }}">Title</label>
                            <input type="text" name="title" id="title{{ $gallery->id }}"
                                class="form-control @error('title') is-invalid @enderror"
                                value="{{ old('title', $gallery->title) }}">

                            @error('title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="image_path{{ $gallery->id }}">Image</label>
                            <input type="file" name="image_path" id="image_path{{ $gallery->id }}"
                                class="form-control @error('image_path') is-invalid @enderror">
                            <small class="text-muted">Leave blank if you don't want to change the image.</small>

                            @error('image_path')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <img src="{{ asset('storage/' . $gallery->image_path) }}" alt="{{ $gallery->title }}"
                                style="width: 100px; height: auto;" class="mt-2">
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-warning">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach

@extends('back.layout.template')
@section('title', 'Packages')

@section('content')

    <!-- content-->
    <main>
        <h1 class="mt-4">Package</h1>
        <ol class="breadcrumb mb-4 active">
            <li>Package</li>
        </ol>

        <div class="mt-3">
            <div class="d-flex justify-content-end">
                <a href="{{ url('admin/packages/create') }}" class="btn btn-warning mb-2">Add Package</a>
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
                <div class="swal" data-swal="{{ session('success') }}"></div>
            @endif

            {{-- success alert --}}
            <div class="swal" data-swal="{{ session('success') }}">

            </div>

            <table class="table table-striped table-bordered" id="dataTable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Package</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Desription</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($packages as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->Category->name }}</td>
                            <td>{{ 'Rp ' . number_format($item->price, 0, ',', '.') }}</td>
                            <td>
                                <img src="{{ asset('storage/back/' . $item->image) }}" alt="{{ $item->name }}"
                                    style="width: 100px; height: auto;">
                            </td>
                            <td>
                                <div
                                    style="max-height: 100px; 
                        max-width: 300px; 
                        overflow: hidden; 
                        text-overflow: ellipsis; 
                        display: -webkit-box;
                        -webkit-line-clamp: 3; /* Maksimum jumlah baris */
                        -webkit-box-orient: vertical;">
                                    {!! $item->description !!}
                                </div>
                            </td>
                            <td>
                                <div class="d-flex flex-column flex-sm-row gap-1 text-center justify-content-center   ">
                                    <a href="{{ url('admin/packages/' . $item->id) }}"
                                        class="btn btn-secondary w-sm-auto"><i class="fa-solid fa-circle-info"></i></a>
                                    <a href="{{ url('admin/packages/' . $item->id . '/edit') }}"
                                        class="btn btn-primary w-sm-auto"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="#" class="btn btn-danger w-sm-auto" onclick="deletePackage(event, this)"
                                        data-id="{{ $item->id }}"><i class="fa-solid fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </main>
@endsection

@push('js')
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.2.1/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.2.1/js/dataTables.bootstrap5.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- alert success --}}

    <script>
        const swal = $('.swal').data('swal');

        if (swal) {
            Swal.fire({
                'title': 'Success',
                'text': swal,
                'icon': 'success',
                'showConfirmButton': false,
                'timer': 1500
            })
        }

        const deletePackage = (event, element) => {
            event.preventDefault(); // Mencegah redirect dari href="#"

            const packageId = element.getAttribute('data-id'); // Ambil data-id dari elemen
            if (!packageId) {
                console.error('Package ID is missing');
                return;
            }

            Swal.fire({
                title: "Are you sure?",
                text: "Delete Package?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    // Tambahkan logika untuk request penghapusan, misalnya AJAX
                    fetch(`/admin/packages/${packageId}`, {
                            method: "DELETE",
                            headers: {
                                "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]')
                                    .getAttribute("content"),
                                "Content-Type": "application/json"
                            }
                        })
                        .then((response) => {
                            if (response.ok) {
                                Swal.fire({
                                    title: "Deleted!",
                                    text: "Your package has been deleted.",
                                    icon: "success"
                                }).then(() => {
                                    // Contoh: Refresh halaman setelah sukses
                                    window.location.reload();
                                });
                            } else {
                                return response.json().then((data) => {
                                    throw new Error(data.message || "Failed to delete package");
                                });
                            }
                        })
                        .catch((error) => {
                            Swal.fire("Error", error.message, "error");
                        });
                }
            });
        };
    </script>

    <script>
        new DataTable('#dataTable');
    </script>
    {{-- <script>
    $(document).ready(function() {
        $('#dataTable').DataTable({
            "paging": true,
            "searching": false, // Nonaktifkan search
            "ordering": false,  // Nonaktifkan sorting
            "info": false       // Nonaktifkan info jumlah data
        });
    });
    </script> --}}
@endpush

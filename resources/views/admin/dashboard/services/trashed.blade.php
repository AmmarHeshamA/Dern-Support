@extends('admin.layouts.master')

@section('title', 'all Services')



@section('content')


    <!-- Buttons -->
    <div class="d-flex justify-content-center my-5">
        <a href="{{ route('admin.service.index') }}" class="btn btn-primary mx-4 btn-lg my-5">Back</a>
    </div>
    <!-- all categoryes -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">All Services</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                @if ($services->isNotEmpty())
                    <table class="table table-hover  table-striped border-2 " style="background-color: #6777ef"
                        id="dataTable" width="100%" cellspacing="0">

                        <!-- Flash Message -->
                        @if (Session::has('status'))
                            <div
                                class="alert alert-success alert-dismissible fade show text-bold w-50 text-center mx-auto my-3">
                                <strong>{{ Session::get('status') }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss='alert'
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        <thead>
                            <tr class="text-center mx-auto border-2">
                                <th class="text-white ">#</th>
                                <th class="text-white ">service-title</th>
                                <th class="text-white ">service-content</th>
                                <th class="text-white ">service-image</th>
                                <th class="text-white ">created at</th>
                                <th class="text-center text-white">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($services as $service)
                                <tr class="text-center mx-auto">
                                    <td>{{ $service->id }}</td>
                                    <td>
                                        {{ $service->title_service }}
                                    </td>

                                    <td>{{ $service->content_service }}</td>
                                    <td>
                                        @if (!empty($service->image_service))
                                            <img src="{{ asset('Uploads/service/' . $service->image_service) }}"
                                                alt="Photo" style="width: 100px; height: auto; margin: 5px;">
                                        @else
                                            No photos
                                        @endif
                                    </td>

                                    <td>{{ $service->created_at }}</td>

                                    <td>
                                        <div class="d-flex justify-content-center">
                                            <form action="{{ route('admin.service.restore', $service->id) }}"
                                                method="POST" class="restore-form">
                                                @csrf
                                                @method('PUT')
                                                <button type="button"
                                                    class="btn btn-success restore-btn mx-1">Restore</button>
                                            </form>
                                            <form action="{{ route('admin.service.forceDelete', $service->id) }}"
                                                method="POST" class="delete-form">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="btn btn-danger delete-btn mx-1">Delete
                                                    Permanently</button>
                                            </form>
                                        </div>
                                    </td>



                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                @else
                    <h1 class="text-center">No Trashed Services</h1>
                @endif

            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const deleteButtons = document.querySelectorAll('.delete-btn');
            const restoreButtons = document.querySelectorAll('.restore-btn');

            deleteButtons.forEach(button => {
                button.addEventListener('click', function(event) {
                    event.preventDefault();
                    const form = this.closest('form');

                    Swal.fire({
                        title: 'Are you sure?',
                        text: "This action is irreversible!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            form.submit();
                        }
                    });
                });
            });

            restoreButtons.forEach(button => {
                button.addEventListener('click', function(event) {
                    event.preventDefault();
                    const form = this.closest('form');

                    Swal.fire({
                        title: 'Are you sure?',
                        text: "This will restore the category!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, restore it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            form.submit();
                        }
                    });
                });
            });
        });
    </script>

@endsection
@extends('admin.layouts.master')

@section('title', 'Dashboard')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Dashboard</h1>
        </div>
    </section>

    <!-- Buttons -->
    <div class="d-flex justify-content-center my-5">
        <a href="{{ route('admin.dashboard') }}" class="btn btn-primary mx-4 btn-lg my-5">All Messages</a>
        <a href="{{ route('admin.dashboard.trashed') }}" class="btn btn-danger mx-4 btn-lg my-5">Trashed Messages</a>
    </div>

    <!-- All messages -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">All Messages</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                @if ($messages->isNotEmpty())
                    <table class="table table-hover table-striped border-2" style="background-color: #6777ef" id="dataTable"
                        width="100%" cellspacing="0">
                        <thead>
                            <tr class="text-center mx-auto border-2">
                                <th class="text-white">#</th>
                                <th class="text-white">Company Name</th>
                                <th class="text-white">Name</th>
                                <th class="text-white">Email</th>
                                <th class="text-white">Phone</th>
                                <th class="text-white">Address</th>
                                <th class="text-white">Photos</th>
                                <th class="text-white">Sending At</th>
                                <th class="text-center text-white">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($messages as $item)
                                <tr class="text-center mx-auto">
                                    <td>{{ $item->id }}</td>
                                    <td>
                                        @if (!empty($item->companyname && !is_array($item->companyname)))
                                            {{ $item->companyname }}
                                        @else
                                            Not entered
                                        @endif
                                    </td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>{{ $item->address }}</td>
                                    <td>
                                        @if (!empty($item->photo))
                                            <img src="{{ asset('Uploads/' . $item->photo) }}" alt="Photo"
                                                style="width: 100px; height: auto; margin: 5px;">
                                        @else
                                            No photos
                                        @endif
                                    </td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>
                                        <div class="d-flex justify-content-center">
                                            <a href="{{ route('admin.dashboard.show', $item->id) }}"
                                                class="btn btn-primary me-2">Show</a>
                                            <form action="{{ route('admin.dashboard.delete', $item->id) }}" method="POST"
                                                class="delete-form">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button"
                                                    class="btn btn-danger delete-btn mx-1">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <h1 class="text-center">No Data</h1>
                @endif
            </div>
        </div>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const deleteButtons = document.querySelectorAll('.delete-btn');

            deleteButtons.forEach(button => {
                button.addEventListener('click', function(event) {
                    event.preventDefault();
                    const form = this.closest('form');

                    Swal.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
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
        });
    </script>

@endsection

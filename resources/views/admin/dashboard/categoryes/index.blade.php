@extends('admin.layouts.master')

@section('title', 'all categories')



@section('content')


    <!-- Buttons -->
    <div class="d-flex justify-content-center my-5">
        <a href="{{ route('admin.categorys.index') }}" class="btn btn-primary mx-4 btn-lg my-5">All Categories</a>
        <a href="{{ route('admin.category.create') }}" class="btn btn-primary mx-4 btn-lg my-5">Add Category</a>
        <a href="{{ route('admin.category.trashed') }}" class="btn btn-danger mx-4 btn-lg my-5">Trashed Category</a>
    </div>
    <!-- all categoryes -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">All Categoryes</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                @if ($categorys->isNotEmpty())
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
                                <th class="text-white ">category_name</th>
                                <th class="text-white ">category_price</th>
                                <th class="text-white ">category_quantity</th>
                                <th class="text-white ">category_image</th>
                                <th class="text-white ">Created at</th>
                                <th class="text-center text-white">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categorys as $category)
                                <tr class="text-center mx-auto">
                                    <td>{{ $category->id }}</td>
                                    <td>
                                        {{ $category->category_name }}
                                    </td>

                                    <td>{{ $category->category_price }}$</td>

                                    <td>{{ $category->category_quantity }}</td>
                                    <td>
                                        @if (!empty($category->category_image))
                                            <img src="{{ asset('Uploads/categories/' . $category->category_image) }}"
                                                alt="Photo" style="width: 100px; height: auto; margin: 5px;">
                                        @else
                                            No photos
                                        @endif
                                    </td>

                                    <td>{{ $category->created_at }}</td>

                                    <td>
                                        <div class="d-flex justify-content-center">
                                            <a href="{{ route('admin.category.show', $category->id) }}"
                                                class="btn btn-primary me-2">Show</a>

                                            <a href="{{ route('admin.category.edit', $category->id) }}"
                                                class="btn btn-warning mx-2">Edit</a>

                                            <form action="{{ route('admin.category.delete', $category->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger mx-1 delete-btn">Delete</button>
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

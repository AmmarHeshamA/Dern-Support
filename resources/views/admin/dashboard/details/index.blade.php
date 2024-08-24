@extends('admin.layouts.master')

@section('title', 'all Orders')



@section('content')


    <!-- Buttons -->
    <div class="d-flex justify-content-center my-5">
        <a href="{{ route('admin.detail.index') }}" class="btn btn-primary mx-4 btn-lg my-5">All Orders</a>
        <a href="{{ route('admin.detail.trashed') }}" class="btn btn-danger mx-4 btn-lg my-5">Canceled Orders</a>
    </div>
    <!-- all categoryes -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">All Orders</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                @if ($details->isNotEmpty())
                    <table class="table table-hover  table-striped border-2 " style="background-color: #6777ef" id="dataTable"
                        width="100%" cellspacing="0">

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
                                <th class="text-white ">name</th>
                                <th class="text-white ">email</th>
                                <th class="text-white ">address</th>
                                <th class="text-white ">city</th>
                                <th class="text-white ">post code</th>
                                <th class="text-white ">phone</th>
                                <th class="text-white ">created at</th>
                                <th class="text-center text-white">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($details as $detail)
                                <tr class="text-center mx-auto">
                                    <td>{{ $detail->id }}</td>
                                    <td>
                                        {{ $detail->name_billing_details }}
                                    </td>

                                    <td>{{ $detail->email_billing_details }}</td>


                                    <td>{{ $detail->address_billing_details }}</td>
                                    <td>{{ $detail->city_billing_details }}</td>
                                    <td>{{ $detail->post_code_billing_details }}</td>
                                    <td>{{ $detail->phone_billing_details }}</td>
                                    <td>{{ $detail->created_at }}</td>




                                    <td>
                                        <div class="d-flex justify-content-center">
                                            <a href="{{ route('admin.detail.show', $detail->id) }}"
                                                class="btn btn-primary me-2">Show</a>

                                            <a href="#">

                                                <button type="submit" class="btn btn-success mx-1">Confirm</button>
                                            </a>

                                            <form action="{{ route('admin.detail.delete', $detail->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger delete-btn mx-1">Cancel</button>
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
                        confirmButtonText: 'Yes, Canceled Order it!'
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

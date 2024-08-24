@extends('admin.layouts.master')

@section('title', 'dashboard')


@section('content')


    <div class="container">
        <div class="row">
            <div class=" mt-5">

                <table class="table table-striped border-2 " id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center mx-auto ">
                            <th>company-name</th>
                            <th>name</th>
                            <th>email</th>
                            <th>phone</th>
                            <th>address</th>
                            <th>Sending at</th>
                            <th>message</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center mx-auto">
                            <td>
                                @if (!empty($message->companyname && !is_array($message->companyname)))
                                    {{ $message->companyname }}
                                @else
                                    Not entered
                                @endif
                            </td>
                            <td>{{ $message->name }}</td>
                            <td>{{ $message->email }}</td>
                            <td>{{ $message->phone }}</td>
                            <td>{{ $message->address }}</td>
                            <td>{{ $message->created_at }}</td>
                            <td>{{ $message->message }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
        <div class="row">
            @if (!empty($message->photo) && !is_array($message->photo))
                <div class="main-image mx-auto col-6">
                    <img src="{{ asset('Uploads/' . $message->photo) }}" alt="Photo" class="w-75">
                </div>
            @else
            @endif


        </div>

    </div>

@endsection

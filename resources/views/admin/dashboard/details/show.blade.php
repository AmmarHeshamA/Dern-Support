@extends('admin.layouts.master')

@section('title', 'show order')



@section('content')

    <div class="card w-75 mx-auto p-4 my-5 shadow-lg">
        <div class="card-header bg-primary text-white text-center">
            <h1 class="mb-0 text-center mx-auto">{{ $order->name_billing_details }}</h1>
        </div>
        <div class="card-body">
            <h2 class="text-primary">Information</h2>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item">
                    <strong>Name: </strong> {{ $order->name_billing_details }}
                </li>
                <li class="list-group-item">
                    <strong>Email: </strong> {{ $order->email_billing_details }}
                </li>
                <li class="list-group-item">
                    <strong>Company: </strong> {{ $order->company_billing_details }}
                </li>
                <li class="list-group-item">
                    <strong>Address: </strong> {{ $order->address_billing_details }}
                </li>
                <li class="list-group-item">
                    <strong>City: </strong> {{ $order->city_billing_details }}
                </li>
                <li class="list-group-item">
                    <strong>Post Code: </strong> {{ $order->post_code_billing_details }}
                </li>
                <li class="list-group-item">
                    <strong>Phone: </strong> {{ $order->phone_billing_details }}
                </li>
                <li class="list-group-item">
                    <strong>Notes: </strong> {{ $order->notes_billing_details }}
                </li>
            </ul>

            <h2 class="text-primary">Products</h2>
            <div class="row">
                @foreach (json_decode($order->categories_billing_details, true) as $product)
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card h-100">
                            <img src="{{ $product['image'] }}" class="card-img-top" alt="{{ $product['name'] }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product['name'] }}</h5>
                                <p class="card-text"><strong>Price:</strong> ${{ $product['price'] }}</p>
                                <p class="card-text"><strong>Quantity:</strong> {{ $product['quantity'] }}</p>
                                <p class="card-text"><strong>Total:</strong>
                                    ${{ $product['price'] * $product['quantity'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="card-footer text-center">
            <a href="{{ route('admin.detail.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
@endsection

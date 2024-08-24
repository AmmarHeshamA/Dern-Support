
@extends('admin.layouts.master')

@section('title', 'show category')



@section('content')

    <div class="card w-75 mx-auto p-4 my-5 shadow-lg">
        <div class="card-header bg-primary text-white text-center">
            <h1 class="mb-0 text-center mx-auto">{{ $category->category_name }}</h1>
        </div>
        <div class="card-body">
            <h2 class="text-primary"> Information</h2>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item">
                    <strong>Price: </strong> {{ $category->category_price }}$
                </li>
                <li class="list-group-item">
                    <strong>Description: </strong> {{ $category->category_description }}
                </li>
                <li class="list-group-item">
                    <strong>Quantity: </strong> {{ $category->category_quantity }}
                </li>
                @if (!empty($category->category_image))
                <li class="list-group-item text-center">
                    <img src="{{ asset('Uploads/categories/' . $category->category_image) }}" alt="Company Photo" class="img-fluid rounded" width="200">
                </li>
                @endif
            </ul>
        </div>
        <div class="card-footer text-center">
            <a href="{{ route('admin.categorys.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>

@endsection

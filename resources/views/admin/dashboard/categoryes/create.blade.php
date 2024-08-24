@extends('admin.layouts.master')

@section('title', 'create page')




@section('content')
<div class="card w-50 mx-auto p-3 bg-primary">
    <!-- Form Create -->
    <form action="{{ route('admin.category.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <!-- Input Name -->
        <div class="form-group mb-3">
            <!-- Input name -->
            <input type="text" name="category_name" class="form-control @error('category_name') is-invalid @enderror"
                value="{{ old('category_name') }}" placeholder="category_name">

            <!-- Show Validation -->
            @error('category_name')
                <div class="invalid-feedback text-left">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
        </div>

        <!-- Input Email -->
        <div class="form-group mb-3">
            <!-- Input Email -->
            <input type="number" name="category_price" class="form-control @error('category_price') is-invalid @enderror "
                value="{{ old('category_price') }}" placeholder="category_price">

            <!-- Show Validation -->
            @error('category_price')
                <div class="invalid-feedback text-left">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
        </div>

        <!-- Input Address -->
        <div class="form-group mb-3">
            <!-- Input Address -->
            <input type="text" name="category_description" class="form-control @error('category_description') is-invalid @enderror"
                value="{{ old('category_description') }}" placeholder="category_description">

            <!-- Show Validation -->
            @error('category_description')
                <div class="invalid-feedback text-left">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
        </div>

        <!-- Input Address -->
        <div class="form-group mb-3">
            <!-- Input Address -->
            <input type="number" name="category_quantity" class="form-control @error('category_quantity') is-invalid @enderror"
                value="{{ old('category_quantity') }}" placeholder="category_quantity">

            <!-- Show Validation -->
            @error('category_quantity')
                <div class="invalid-feedback text-left">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
        </div>

        <!-- Input Photo -->
        <div class="form-group mb-3">
            <!-- Input Photo -->
            <input type="file" name="category_image" class="form-control @error('category_image') is-invalid @enderror"
                value="{{ old('category_image') }}" placeholder="category_image">

            <!-- Show Validation -->
            @error('category_image')
                <div class="invalid-feedback text-left">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
        </div>

        <!-- Button Add -->
        <div class="text-center mx-auto">
            <button type="submit" class="btn btn-dark">Add</button>
        </div>

    </form>
</div>
@endsection



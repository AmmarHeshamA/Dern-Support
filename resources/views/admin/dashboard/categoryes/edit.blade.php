@extends('admin.layouts.master')

@section('title', 'edit page')



@section('content')

    <div class="card w-50 mx-auto p-3 bg-primary">
        <!-- Form Create -->
        <form action="{{ route('admin.category.update', $category->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Input category_name -->
            <div class="form-group mb-3">
                <!-- Input category_name -->
                <input type="text" name="category_name" class="form-control" value="{{ $category->category_name }}"
                    placeholder="category_name">
            </div>

            <!-- Input category_price -->
            <div class="form-group mb-3">
                <!-- Input category_price -->
                <input type="number" name="category_price" class="form-control " value="{{ $category->category_price }}"
                    placeholder="category_price">

            </div>

            <!-- Input category_description -->
            <div class="form-group mb-3">
                <!-- Input Address -->
                <textarea name="category_description" class="form-control " placeholder="category_description">{{ $category->category_description }}</textarea>

            </div>

            <!-- Input category_quantity -->
            <div class="form-group mb-3">
                <!-- Input category_quantity -->
                <input type="number" name="category_quantity" class="form-control "
                    value="{{ $category->category_quantity }}" placeholder="category_quantity">

            </div>

            <!-- Input Photo -->
            <div class="form-group mb-3">
                <!-- Input category_image -->
                <input type="file" name="category_image" class="form-control" placeholder="category_image">
            </div>

            <!-- Button UPDATE -->
            <div class="text-center mx-auto">
                <button type="submit" class="btn btn-dark">Update</button>
            </div>

        </form>
    </div>


@endsection

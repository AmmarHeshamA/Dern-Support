@extends('admin.layouts.master')

@section('title', 'create page')




@section('content')
    <div class="card w-50 mx-auto p-3 bg-primary">
        <!-- Form Create -->
        <form action="{{ route('admin.service.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <!-- Input Name -->
            <div class="form-group mb-3">
                <!-- Input name -->
                <input type="text" name="title_service" class="form-control @error('title_service') is-invalid @enderror"
                    value="{{ old('title_service') }}" placeholder="title_service">

                <!-- Show Validation -->
                @error('title_service')
                    <div class="invalid-feedback text-left">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>


            <!-- Input Address -->
            <div class="form-group mb-3">
                <!-- Input Address -->
                <input type="text" name="content_service"
                    class="form-control @error('content_service') is-invalid @enderror" value="{{ old('content_service') }}"
                    placeholder="content_service">

                <!-- Show Validation -->
                @error('content_service')
                    <div class="invalid-feedback text-left">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>


            <!-- Input Photo -->
            <div class="form-group mb-3">
                <!-- Input Photo -->
                <input type="file" name="image_service" class="form-control @error('image_service') is-invalid @enderror"
                    value="{{ old('image_service') }}" placeholder="image_service">

                <!-- Show Validation -->
                @error('image_service')
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

@extends('admin.layouts.master')

@section('title', 'create page')




@section('content')
    <div class="card w-50 mx-auto p-3 bg-primary">
        <!-- Form Create -->
        <form action="{{ route('admin.comment.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <!-- Input Name -->
            <div class="form-group mb-3">
                <!-- Input name -->
                <input type="text" name="comment_title" class="form-control @error('comment_title') is-invalid @enderror"
                    value="{{ old('comment_title') }}" placeholder="comment_title">

                <!-- Show Validation -->
                @error('comment_title')
                    <div class="invalid-feedback text-left">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>


            <!-- Input Address -->
            <div class="form-group mb-3">
                <!-- Input Address -->
                <input type="text" name="comment_content"
                    class="form-control @error('comment_content') is-invalid @enderror" value="{{ old('comment_content') }}"
                    placeholder="comment_content">

                <!-- Show Validation -->
                @error('comment_content')
                    <div class="invalid-feedback text-left">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>

            <!-- Input Address -->
            <div class="form-group mb-3">
                <!-- Input Address -->
                <input type="text" name="comment_users" class="form-control @error('comment_users') is-invalid @enderror"
                    value="{{ old('comment_users') }}" placeholder="comment_user">

                <!-- Show Validation -->
                @error('comment_users')
                    <div class="invalid-feedback text-left">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>


            <!-- Input Photo -->
            <div class="form-group mb-3">
                <!-- Input Photo -->
                <input type="file" name="comment_image" class="form-control @error('comment_image') is-invalid @enderror"
                    value="{{ old('comment_image') }}" placeholder="comment_image">

                <!-- Show Validation -->
                @error('comment_image')
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

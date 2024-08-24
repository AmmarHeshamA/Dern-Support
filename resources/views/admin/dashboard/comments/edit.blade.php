@extends('admin.layouts.master')

@section('title', 'edit page')



@section('content')

    <div class="card w-50 mx-auto p-3 bg-primary">
        <!-- Form Create -->
        <form action="{{ route('admin.comment.update', $comment->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Input category_name -->
            <div class="form-group mb-3">
                <!-- Input category_name -->
                <input type="text" name="comment_title" class="form-control" value="{{ $comment->comment_title }}"
                    placeholder="comment_title">
            </div>

            <!-- Input category_price -->
            <div class="form-group mb-3">
                <!-- Input category_price -->
                <input type="text" name="comment_users" class="form-control " value="{{ $comment->comment_users }}"
                    placeholder="comment_users">

            </div>

            <!-- Input category_description -->
            <div class="form-group mb-3">
                <!-- Input Address -->
                <textarea name="comment_content" class="form-control " placeholder="comment_content">{{ $comment->comment_content }}</textarea>

            </div>

            <!-- Input Photo -->
            <div class="form-group mb-3">
                <!-- Input category_image -->
                <input type="file" name="comment_image" class="form-control" placeholder="comment_image">
            </div>

            <!-- Button UPDATE -->
            <div class="text-center mx-auto">
                <button type="submit" class="btn btn-dark">Update</button>
            </div>

        </form>
    </div>


@endsection

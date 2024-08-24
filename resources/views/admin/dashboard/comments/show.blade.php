
@extends('admin.layouts.master')

@section('title', 'show comment')



@section('content')

    <div class="card w-75 mx-auto p-4 my-5 shadow-lg">
        <div class="card-header bg-primary text-white text-center">
            <h1 class="mb-0 text-center mx-auto">{{ $comment->comment_title }}</h1>
        </div>
        <div class="card-body">
            <h2 class="text-primary"> Information</h2>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item">
                    <strong>user: </strong> {{ $comment->comment_users }}
                </li>
                <li class="list-group-item">
                    <strong>Description:
                        </strong>
                        {{ $comment->comment_content }}
                </li>
                @if (!empty($comment->comment_image))
                <li class="list-group-item text-center">
                    <img src="{{ asset('Uploads/comments/' . $comment->comment_image) }}" alt="Company Photo" class="img-fluid rounded" width="200">
                </li>
                @endif
            </ul>
        </div>
        <div class="card-footer text-center">
            <a href="{{ route('admin.comment.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>

@endsection


@extends('admin.layouts.master')

@section('title', 'show Service')



@section('content')

    <div class="card w-75 mx-auto p-4 my-5 shadow-lg">
        <div class="card-header bg-primary text-white text-center">
            <h1 class="mb-0 text-center mx-auto">{{ $service->title_service }}</h1>
        </div>
        <div class="card-body">
            <h2 class="text-primary"> Information</h2>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item">
                    <strong>Description:
                        </strong>
                        {{ $service->content_service }}
                </li>
                @if (!empty($service->image_service))
                <li class="list-group-item text-center">
                    <img src="{{ asset('Uploads/service/' . $service->image_service) }}" alt="Company Photo" class="img-fluid rounded" width="200">
                </li>
                @endif
            </ul>
        </div>
        <div class="card-footer text-center">
            <a href="{{ route('admin.service.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>

@endsection

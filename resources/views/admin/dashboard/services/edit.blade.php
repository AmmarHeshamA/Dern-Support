@extends('admin.layouts.master')

@section('title', 'edit page')



@section('content')

    <div class="card w-50 mx-auto p-3 bg-primary">
        <!-- Form Create -->
        <form action="{{ route('admin.service.update', $service->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Input category_name -->
            <div class="form-group mb-3">
                <!-- Input category_name -->
                <input type="text" name="title_service" class="form-control" value="{{ $service->title_service }}"
                    placeholder="title_service">
            </div>


            <!-- Input category_description -->
            <div class="form-group mb-3">
                <!-- Input Address -->
                <textarea name="content_service" class="form-control " placeholder="content_service">{{ $service->content_service }}</textarea>

            </div>

            <!-- Input Photo -->
            <div class="form-group mb-3">
                <!-- Input category_image -->
                <input type="file" name="image_service" class="form-control" placeholder="image_service">
            </div>

            <!-- Button UPDATE -->
            <div class="text-center mx-auto">
                <button type="submit" class="btn btn-dark">Update</button>
            </div>

        </form>
    </div>


@endsection

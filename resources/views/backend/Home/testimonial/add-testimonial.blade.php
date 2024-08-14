@extends('backend.layouts.main')
@push('title')
<title>Add feature</title>
@endpush
</style>
@php
    use Illuminate\Support\Facades\Storage;
@endphp

@section('main')
<div class="content-wrapper">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">

                <div class="col-sm-6">
                    <h1>{{$title}}</h1>
                </div>
                <div class="col-sm-6">

                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <form action="{{$url}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Testimonial</h3>
                    <div class="card-tools">

                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>

                    </div>
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-12 form-group">


                            <div class="mb-3">
                                <label for="" class="form-label">Profile Image</label>
                                <input type="file" name="profile_image" id="" class="form-control"  accept="image/*"  value="" />
                                @if(isset($testimonial->profile_image) && $testimonial->profile_image)
                                    <img src="{{ Storage::url($testimonial->profile_image) }}" alt="Current Image" style="max-width: 200px; max-height: 200px;">
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Description</label>
                                <input type="text" name="description" id="" class="form-control" value="{{$testimonial->description}}" />
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Name</label>
                                <input type="text" name="name" id="" class="form-control" value="{{$testimonial->name}}" />
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Profile</label>
                                <input type="text" name="profile_name" id="" class="form-control" value="{{$testimonial->profile_name}}" />
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <button class="btn btn-primary add">Submit</button>

    </form>

    </section>

</div>
@endsection

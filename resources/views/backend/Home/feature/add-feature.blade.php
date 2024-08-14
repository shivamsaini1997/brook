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
                    <h1>Add Feature</h1>
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
                    <h3 class="card-title">1. Feature</h3>
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
                                <label for="" class="form-label">image</label>
                                <input type="file" name="image" id="" class="form-control" accept="image/*" value="" /><br>
                                @if(isset($feature->image) && $feature->image)
                                <img src="{{ Storage::url($feature->image) }}" alt="Current Image" style="max-width: 200px; max-height: 200px;">
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Main Heading</label>
                                <input type="text" name="main_heading" id="" class="form-control" value="{{$feature->main_heading}}" />
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Sub Heading</label>
                                <input type="text" name="sub_heading" id="" class="form-control" value="{{$feature->sub_heading}}" />
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

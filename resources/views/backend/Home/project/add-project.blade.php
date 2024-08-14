@extends('backend.layouts.main')
@push('title')
<title>{{$title}}</title>
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
                    <h3 class="card-title">Project</h3>
                    <div class="card-tools">

                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>

                    </div>
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Category</label>
                                <select name="category" class="form-control"  id="">
                                    <option value="">Select</option>
                                    <option value="Web Development" {{$project->category =='Web Development'?'selected':''}}>Web Development</option>
                                    <option value="Product Design" {{$project->category =='Product Design'?'selected':''}}>Product Design</option>
                                    <option value="Marketing" {{$project->category =='Marketing'?'selected':''}}>Marketing</option>
                                    <option value="UI/UX Design" {{$project->category =='UI/UX Design'?'selected':''}}>UI/UX Design</option>
                                    <option value="Photoshop" {{$project->category =='Photoshop'?'selected':''}}>Photoshop</option>
                                    <option value="Motion Graphics" {{$project->category =='Motion Graphics'?'selected':''}}>Motion Graphics</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Project Image</label>
                                <input type="file" name="project_image" id="" class="form-control"  accept="image/*"  value="" />
                                @if(isset($project->project_image) && $project->project_image)
                                    <img src="{{ Storage::url($project->project_image) }}" alt="Current Image" style="max-width: 200px; max-height: 200px;">
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Project Name</label>
                                <input type="text" name="project_name" id="project_name" class="form-control" value="{{$project->project_name}}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Slug</label>
                                <input type="text" name="slug" id="slug" class="form-control" value="{{$project->slug}}" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Client Name</label>
                                <input type="text" name="client_name" id="" class="form-control" value="{{$project->client_name}}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Project Type</label>
                                <input type="text" name="project_type" id="" class="form-control" value="{{$project->project_type}}" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Start Date</label>
                                <input type="date" name="start_date" id="" class="form-control" value="{{$project->start_date}}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">End Date</label>
                                <input type="date" name="end_date" id="" class="form-control" value="{{$project->end_date}}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Location</label>
                                <input type="text" name="location" id="" class="form-control" value="{{$project->location}}" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="" class="form-label">Project Detail</label>
                                <textarea id="summernote" name="project_detail">
                                    {{$project->project_detail}}
                                </textarea>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary add">Submit</button>
                </div>
            </div>

    </form>

    </section>

</div>

@endsection

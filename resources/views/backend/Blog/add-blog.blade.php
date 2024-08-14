@extends('backend.layouts.main')
{{-- @push('title')
<title>{{$title}}</title>
@endpush --}}
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
                    {{-- @php dd($title); @endphp --}}
                    <h1>{{$title}}</h1>
                    {{-- <h1>Add Blog</h1> --}}
                </div>
                <div class="col-sm-6">

                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <form action="{{$url}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="data_id" value="">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Blog</h3>
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
                                    <option value="Digital Marketing"{{isset($blog)?$blog->category == 'Digital Marketing'?'selected':'':''}}>Digital Marketing</option>
                                    <option value="Branding Designs"{{isset($blog)?$blog->category == 'Branding Designs'?'selected':'':''}}>Branding Designs</option>
                                    <option value="Sterling Silver"{{isset($blog)?$blog->category == 'Sterling Silver'?'selected':'':''}}>Sterling Silver</option>
                                    <option value="Business Solution" {{isset($blog)?$blog->category == 'Business Solution'?'selected':'':''}}>Business Solution</option>
                                    <option value="Corporate Policy" {{isset($blog)?$blog->category == 'Corporate Policy'?'selected':'':''}}>Corporate Policy</option>
                                    <option value="Development"{{isset($blog)?$blog->category == 'Development'?'selected':'':''}}>Development</option>
                                    <option value="Web Design "{{isset($blog)?$blog->category == 'Web Design'?'selected':'':''}}>Web Design </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Blog Image</label>
                                <input type="file" name="blog_image" id="" class="form-control"  accept="image/*"  value="" />
                                @if(isset($blog->blog_image) && $blog->blog_image)
                                <img src="{{ Storage::url($blog->blog_image) }}" alt="Current Image" style="max-width: 200px; max-height: 200px;">
                                @endif
                            </div>
                        </div>
                        {{-- @php dd($blog); @endphp --}}
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Title</label>
                                <input type="text" name="title" id="blog_name" class="slug-create form-control" value="{{isset($blog)?$blog->title:''}}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Slug</label>
                                <input type="text" name="slug" id="slug" class="form-control" value="{{isset($blog)?$blog->slug:''}}" />
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="" class="form-label">Blog Detail</label>
                                <textarea id="summernote" name="blog_detail">
                                    {{isset($blog)?$blog->blog_detail:''}}
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

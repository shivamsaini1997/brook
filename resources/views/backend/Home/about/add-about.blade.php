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
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add About</h1>
                </div>
                <div class="col-sm-6">

                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <form action="{{url('admin/add-about')}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="data_id" value="{{$about?$about->id:''}}">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">About Company</h3>
                    <div class="card-tools">

                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>

                    </div>
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="" class="form-label">image1</label>
                                <input type="file" name="image1" id="" class="form-control" accept="image/*" value="" /><br>
                                @if(isset($about->image1) && $about->image1)
                                <img src="{{ Storage::url($about->image1) }}" alt="Current Image" style="max-width: 600px; max-height: 300px;">
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="" class="form-label">image2</label>
                                <input type="file" name="image2" id="" class="form-control" accept="image/*" value="" /><br>
                                @if(isset($about->image2) && $about->image2)
                                <img src="{{ Storage::url($about->image2) }}" alt="Current Image" style="max-width: 600px; max-height: 300px;">
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="" class="form-label">image3</label>
                                <input type="file" name="image3" id="" class="form-control" accept="image/*" value="" /><br>
                                @if(isset($about->image3) && $about->image3)
                                <img src="{{ Storage::url($about->image3) }}" alt="Current Image" style="max-width: 600px; max-height: 300px;">
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Main Heading</label>
                                <input type="text" name="main_heading" id="" class="form-control" value="{{$about?$about->main_heading:''}}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Sub Heading</label>
                                <input type="text" name="sub_heading" id="" class="form-control" value="{{$about?$about->sub_heading:''}}" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="" class="form-label">Description</label>
                                <input type="text" name="description" id="" class="form-control" value="{{$about?$about->description:''}}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Point 1</label>
                                <input type="text" name="point1" id="" class="form-control" value="{{$about?$about->point1:''}}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Point 2</label>
                                <input type="text" name="point2" id="" class="form-control" value="{{$about?$about->point2:''}}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Point 3</label>
                                <input type="text" name="point3" id="" class="form-control" value="{{$about?$about->point3:''}}" />
                            </div>
                        </div>
                       <div class="col-md-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Point 4</label>
                            <input type="text" name="point4" id="" class="form-control" value="{{$about?$about->point4:''}}" />
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

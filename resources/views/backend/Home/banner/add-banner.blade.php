@extends('backend.layouts.main')
@push('title')
<title>Add Banner</title>
@endpush
@section('main')
<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Banner</h1>
                </div>
                <div class="col-sm-6">

                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <form action="{{$url}}" method="post">
            @csrf
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">1. Banner</h3>
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
                                <label for="" class="form-label">Sub Heading</label>
                                <input type="text" name="sub_heading" id="" class="form-control" value="{{$banner->sub_heading}}" />
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Main Heading</label>
                                <input type="text" name="main_heading" id="" class="form-control" value="{{$banner->main_heading}}" />
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Main Heading 2</label>
                                <input type="text" name="main_heading2" id="" class="form-control" value="{{$banner->main_heading2}}" />
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Description</label>
                                <input type="text" name="description" id="" class="form-control" value="{{$banner->description}}" />
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Status</label>
                                <select name="status" id="" class="form-select form-control">
                                    @if($banner->status == 1)
                                        <option value="1" selected>Active</option>
                                        <option value="0">Deactive</option>
                                    @elseif($banner->status == 0)
                                        <option value="1">Active</option>
                                        <option value="0" selected>Deactive</option>
                                    @else
                                        <option value="1">Active</option>
                                    @endif
                                </select>
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

@extends('backend.layouts.main')
@push('title')
<title>Manage Banner</title>
@endpush
<style>
    .btn-icon {
        font-size: 20px;
        margin: 0 12px 0 0;
        color: #111;
    }
</style>
@section('main')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">

            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Manage Banner</h1>
                </div>
                <div class="col-sm-6">

                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        {{-- <div class="card-header">
                            <h3 class="card-title">DataTable with minimal features & hover style</h3>
                        </div> --}}
                        {{-- @if(Session::get('success'))
                        <p class="text-success">{{Session::get('success')}}</p>
                        @endif --}}
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Sub Heading</th>
                                    <th>Main Heading</th>
                                    <th>Main Heading 2</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th style="width: 8%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($banner as $banners)

                                <tr>
                                    <td>{{ $loop->iteration }}.</td>
                                    <td>
                                        {{$banners->sub_heading}}
                                    </td>
                                    <td>
                                        {{$banners->main_heading}}
                                    </td>
                                    <td>
                                        {{$banners->main_heading2}}
                                    </td>
                                    <td>
                                        {{$banners->description}}
                                    </td>
                                    <td>
                                        @if($banners->status == 1)
                                        <a href="{{route('banner-status',['id'=>$banners->banner_id,'status'=>0])}}"
                                            onclick="return confirm('Are you sure!')"><span
                                                class="btn bg-success">Active</span></a>
                                        @elseif($banners->status == 0)
                                        <a href="{{route('banner-status',['id'=>$banners->banner_id,'status'=>1])}}"
                                            onclick="return confirm('Are you sure!')"><span
                                                class="btn bg-danger">Deactive</span></a>
                                        @else

                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{route('edit-banner',['id' => $banners->banner_id])}}"
                                            class="btn-icon"> <i class="far fa-edit"></i></a>
                                        <a href="{{route('delete-banner',['id' => $banners->banner_id])}}"
                                            class="btn-icon open-detele-modal" data-toggle="modal" data-target="#modal-default"><i
                                                class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>

                    </div>



                </div>

            </div>

        </div>

    </section>
    <!-- Delete Modal -->
<div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default-label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h5 class="modal-title" id="modal-default-label">Confirm Delete</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- Modal Body -->
            <div class="modal-body text-center">
                <b>Are you sure you want to delete this banner?</b>
            </div>
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="" class="btn btn-primary delete-modal">Delete</a>
            </div>
        </div>
    </div>
</div>


</div>



@endsection

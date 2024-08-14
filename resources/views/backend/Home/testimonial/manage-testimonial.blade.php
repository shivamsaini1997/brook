@extends('backend.layouts.main')
@push('title')
<title>Manage Feature</title>
@endpush
<style>
    .btn-icon {
        font-size: 20px;
        margin: 0 12px 0 0;
        color: #111;
    }
    .svg_icon_code {
    height: 100px;
    overflow: auto;
}
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
                    <h1>Manage Service Offer</h1>
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

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th style="width: 20%;">Profile Image</th>
                                    <th style="width: 15%;">Description</th>
                                    <th style="width: 15%;">Name </th>
                                    <th>Profile</th>
                                    <th >Status</th>
                                    <th style="width: 10%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($testimonial as $testimonials)

                                <tr>
                                    <td>{{ $loop->iteration }}.</td>
                                    <td>
                                        <div class="">
                                        <img src="{{ Storage::url($testimonials->profile_image) }}" alt="" width="150" height="100">

                                        </div>
                                    </td>
                                    <td>
                                        {{$testimonials->description}}
                                    </td>
                                    <td>
                                        {{$testimonials->name}}
                                    </td>
                                    <td>
                                        {{$testimonials->profile_name}}
                                    </td>



                                    <td>
                                        @if($testimonials->status == 1)
                                        <a href="{{route('status-service',['id'=>$testimonials->id,'status'=>0])}}"
                                            onclick="return confirm('Are you sure!')"><span
                                                class="btn bg-success">Active</span></a>
                                        @elseif($testimonials->status == 0)
                                        <a href="{{route('status-service',['id'=>$testimonials->id,'status'=>1])}}"
                                            onclick="return confirm('Are you sure!')"><span
                                                class="btn bg-danger">Deactive</span></a>
                                        @else

                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{route('edit-testimonial',['id' => $testimonials->id])}}"
                                            class="btn-icon"> <i class="far fa-edit"></i></a>
                                        <a href="{{route('delete-testimonial',['id' => $testimonials->id])}}"
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

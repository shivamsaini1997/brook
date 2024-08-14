@extends('frontend.layouts.main')

@section('main')
    <form action="{{url('/upload')}}" enctype="multipart/form-data" class="mt-5" method="post">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Choose file</label>
            <input
                type="file"
                class="form-control"
                name="image"
                id=""
                placeholder=""
                aria-describedby="fileHelpId"
            />
            <div id="fileHelpId" class="form-text">Help text</div>
        </div>
        <button class="btn btn-primary">Submit</button>
    </form>
@endsection
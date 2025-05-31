@extends('admin_layout.admin_dashboard')

@section('content')
@include('sweetalert::alert')
<div>
    <div>
        <h1 class="text-dark">Photo Gallery</h1>
        <p class="text-dark">Adding Photo to the Gallery Page</p>
    </div>
    <div class="mt-4">
        <form action="{{route('add_photo')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mt-3">
                <label for="">Speaker Photo</label>
                <input type="file" class="form-control" name="photo" id="photo">
            </div>
            <div class="myself-button mt-3">
                <button class="btn" type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection

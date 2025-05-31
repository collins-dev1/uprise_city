@extends('admin_layout.admin_dashboard')

@section('content')
@include('sweetalert::alert')
<div>
    <div>
        <h1 class="text-dark">Speakers</h1>
        <p class="text-dark">Adding Conference Speakers with there information</p>
    </div>
    <div class="mt-4">
        <form action="{{route('create_speaker')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="">Speaker Full Name</label>
                <input type="text" class="form-control" name="speaker_name" id="speaker_name" placeholder="Add the Speaker Full Name">
            </div>
            <div class="mt-3">
                <label for="">Speaker Photo</label>
                <input type="file" class="form-control" name="speaker_photo" id="speaker_photo">
            </div>
            <div class="mt-3">
                <label for="">Speaker First Description</label>
                <textarea name="speaker_description1" id="speaker_description1" class="form-control" placeholder="Add the Speaker First Description...." cols="30" rows="10"></textarea>
            </div>
            <div class="mt-3">
                <label for="">Speaker Second Description</label>
                <textarea name="speaker_description2" id="speaker_description2" class="form-control" placeholder="Add the Speaker Second Description...." cols="30" rows="10"></textarea>
            </div>
            <div class="mt-3">
                <label for="">Speaker Third Description</label>
                <textarea name="speaker_description3" id="speaker_description3" class="form-control" placeholder="Add the Speaker Third Description...." cols="30" rows="10"></textarea>
            </div>
            <div class="mt-3">
                <label for="">Speaker Fourth Description</label>
                <textarea name="speaker_description4" id="speaker_description4" class="form-control" placeholder="Add the Speaker Third Description...." cols="30" rows="10"></textarea>
            </div>
            <div class="myself-button mt-3">
                <button class="btn" type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection

@extends('admin_layout.admin_dashboard')

@section('content')
@include('sweetalert::alert')
<div>
    <div>
      <h1 class="text-dark">Photo Gallery</h1>
      <p class="text-dark">Managing Informations About Photo Gallery</p>
    </div>
    <div class="table-responsive mt-4">
        <table class="table table-bordered" style="color: #000;">
            <thead align="center" style="background-color: #1E3E62; color: #FEF9F2;">
                <tr>
                  <th style="color: #FEF9F2">No</th>
                  <th style="color: #FEF9F2">Gallery Photo</th>
                  <th style="color: #FEF9F2">Actions</th>
                </tr>
            </thead>
            <tbody align="center">
                @php $rowNumber = 1 @endphp
                @foreach ($gallerys as $gallery)
                <tr>
                    <td>{{ $rowNumber++ }}</td>
                    <td>
                        <img src="/storage/gallery_pictures/{{ basename($gallery->photo) }}" alt="" width="50px" height="50px">
                    </td>
                    <td>
                        <div class="manage-buttons">
                            <a href="{{route('delete_photo', $gallery->id)}}" onclick="return confirm('Are you sure you want to Delete???')" class="delete-button">
                                <button class="btn" type="submit">Delete</button>
                            </a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</div>
@endsection

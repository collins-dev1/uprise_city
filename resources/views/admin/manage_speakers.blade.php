@extends('admin_layout.admin_dashboard')

@section('content')
@include('sweetalert::alert')
<div>
    <div>
      <h1 class="text-dark">All Speakers</h1>
      <p class="text-dark">Managing Informations About All Speakers</p>
    </div>
    <div class="table-responsive mt-4">
        <table class="table table-bordered" style="color: #000;">
            <thead align="center" style="background-color: #1E3E62; color: #FEF9F2;">
                <tr>
                  <th style="color: #FEF9F2">No</th>
                  <th style="color: #FEF9F2">Speaker Photo</th>
                  <th style="color: #FEF9F2">Speaker Name</th>
                  <th style="color: #FEF9F2">Speaker First Description</th>
                  <th style="color: #FEF9F2">Speaker Second Description</th>
                  <th style="color: #FEF9F2">Speaker Third Description</th>
                  <th style="color: #FEF9F2">Speaker Fourth Description</th>
                  <th style="color: #FEF9F2">Actions</th>
                </tr>
            </thead>
            <tbody align="center">
                @php $rowNumber = 1 @endphp
                @foreach ($speakers as $speaker)
                <tr>
                    <td>{{ $rowNumber++ }}</td>
                    <td>
                        <img src="{{ $speaker->speaker_photo }}" alt="" width="50px" height="50px">
                    </td>
                    <td>{{$speaker->speaker_name}}</td>
                    <td>{{$speaker->speaker_description1}}</td>
                    <td>{{$speaker->speaker_description2}}</td>
                    <td>{{$speaker->speaker_description3}}</td>
                    <td>{{$speaker->speaker_description1}}</td>
                    <td>
                        <div class="manage-buttons">
                            <a href="" onclick="return confirm('Are you sure you want to Edit???')" class="edit-button">
                                <button class="btn" type="submit">Edit</button>
                            </a>
                            <a href="" onclick="return confirm('Are you sure you want to Delete???')" class="delete-button">
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

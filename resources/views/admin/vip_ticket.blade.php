@extends('admin_layout.admin_dashboard')

@section('content')
@include('sweetalert::alert')
<div>
    <div>
      <h1 class="text-dark">VIP Ticket Members</h1>
      <p class="text-dark">Viewing and Managing Informations About VIP Ticket Members</p>
    </div>
    <div class="table-responsive mt-4">
        <table class="table table-bordered" style="color: #000;">
            <thead align="center" style="background-color: #1E3E62; color: #FEF9F2;">
                <tr>
                  <th style="color: #FEF9F2">No</th>
                  <th style="color: #FEF9F2">Full Name</th>
                  <th style="color: #FEF9F2">Email Address</th>
                  <th style="color: #FEF9F2">Phone Number</th>
                  <th style="color: #FEF9F2">Actions</th>
                </tr>
            </thead>
            <tbody align="center">
                @php $rowNumber = 1 @endphp
                @foreach ($members as $member)
                <tr>
                    <td>{{ $rowNumber++ }}</td>
                    <td>{{$member->full_name}}</td>
                    <td>{{$member->email}}</td>
                    <td>{{$member->phone_number}}</td>
                    <td>
                        <div class="manage-buttons">
                            <a href="{{route('delete_user', $member->id)}}" onclick="return confirm('Are you sure you want to Delete???')" class="delete-button">
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


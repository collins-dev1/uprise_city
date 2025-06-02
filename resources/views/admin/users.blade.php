@extends('admin_layout.admin_dashboard')

@section('content')
@include('sweetalert::alert')
<div>
    <div>
      <h1 class="text-dark">Registered Members</h1>
      <p class="text-dark">Managing Informations About All Registered Members</p>
    </div>
    <div class="table-responsive mt-4">
        <table class="table table-bordered" style="color: #000;">
            <thead align="center" style="background-color: #1E3E62; color: #FEF9F2;">
                <tr>
                  <th style="color: #FEF9F2">No</th>
                  <th style="color: #FEF9F2">Full Name</th>
                  <th style="color: #FEF9F2">Email Address</th>
                  <th style="color: #FEF9F2">Phone Number</th>
                  <th style="color: #FEF9F2">State</th>
                  <th style="color: #FEF9F2">Job Title</th>
                  <th style="color: #FEF9F2">Organization/Company Name</th>
                  <th style="color: #FEF9F2">Subscription Ticket</th>
                  <th style="color: #FEF9F2">Payment Status</th>
                  <th style="color: #FEF9F2">User Scan Code</th>
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
                    <td>{{$member->state}}</td>
                    <td>{{$member->job_title}}</td>
                    <td>{{$member->company_name}}</td>
                    <td>{{$member->subscription_ticket}}</td>
                    @if ($member->payment_status == 'pending')
                    <td class="fw-bold text-danger">Pending...</td>
                    @elseif ($member->payment_status == 'Approved')
                    <td class="fw-bold text-success">Paid/Approved</td>
                    @endif
                    @if ($member->qrcode == null)
                    <td class="fw-bold">Not Paid</td>
                    @else
                    <td>
                        <td class="fw-bold">Paid</td>
                    </td>
                    @endif
                    <td>
                        <div class="manage-buttons">
                            @if ($member->payment_status == "pending")
                            <a href="{{route('users.approve', $member->id)}}" onclick="return confirm('Are you sure you want to Approve this Member???')"  class="edit-button">
                                <button class="btn" type="submit">Approve</button>
                            </a>
                            @endif
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

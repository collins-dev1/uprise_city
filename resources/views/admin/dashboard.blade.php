@extends('admin_layout.admin_dashboard')

@section('content')
    <div class="container">
        <div class="box">
            <h3>All Registered Members</h3>
            <h4>{{ $member }}</h4>
        </div>
        <div class="box">
            <h3>All Approved Members</h3>
            <h4>{{ $approve }}</h4>
        </div>
        <div class="box">
            <h3>All Regular Ticket Users</h3>
            <h4>{{ $regular }}</h4>
        </div>
        <div class="box">
            <h3>All Special Ticket Users</h3>
            <h4>{{ $special }}</h4>
        </div>
        <div class="box">
            <h3>All VIP Ticket Users</h3>
            <h4>{{ $vip }}</h4>
        </div>
    </div>
    <style>
        .container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
        }

        .container .box {
            padding: 20px;
            background-color: #261FB3;
            border-radius: 20px;
            text-align: center;
        }

        .container .box h4,
        h3 {
            color: #fff;
        }

        @media (max-width: 768px) {
            .container {
                grid-template-columns: repeat(1, 1fr);
            }
        }
    </style>
@endsection

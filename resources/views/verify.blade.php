<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendee Verification | Uprise City Conference</title>
    <link rel="icon" href="{{ asset('uprise_city/upriseimg/uprise.jpg') }}" sizes="32x32" />
    <link rel="icon" href="{{ asset('uprise_city/upriseimg/uprise.jpg') }}" sizes="192x192" />
    <link rel="apple-touch-icon" href="{{ asset('uprise_city/upriseimg/uprise.jpg') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        .verification-card {
            max-width: 600px;
            border-radius: 12px;
            border: 1px solid #e0e0e0;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }
        .header-bar {
            height: 6px;
            border-radius: 12px 12px 0 0;
            background: linear-gradient(90deg, #6a11cb 0%, #2575fc 100%);
        }
        .status-badge {
            font-size: 0.8rem;
            padding: 4px 10px;
            border-radius: 20px;
        }
        .security-alert {
            border-left: 4px solid #ffc107;
            background-color: #fff8e1;
        }
    </style>
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="card verification-card mx-auto overflow-hidden">
            <div class="header-bar"></div>

            <div class="card-body p-4">
                <!-- Conference Header -->
                <div class="text-center mb-4">
                    <img src="{{ asset('uprise_city/upriseimg/uprisecitylogo.png') }}" alt="Conference Logo" style="height: 100px; width:100px;">
                    <h4 class="mt-3 mb-1">Attendee Verification</h4>
                    <p class="text-muted small">Staff Control Panel</p>
                </div>

                <!-- Attendee Information -->
                <div class="mb-4 p-3 bg-white rounded-3 border">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <h5 class="mb-0">
                            <i class="bi bi-person-circle me-2"></i>
                            {{ $user->full_name }}
                        </h5>
                        <span class="status-badge {{ $user->payment_status === 'Approved' ? 'bg-success' : 'bg-danger' }} text-white">
                            {{ $user->payment_status }}
                        </span>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <p class="mb-1"><strong>Email:</strong></p>
                            <p class="text-muted">{{ $user->email }}</p>
                        </div>
                        <div class="col-md-6">
                            <p class="mb-1"><strong>Ticket Type:</strong></p>
                            <p class="text-muted">{{ $user->subscription_ticket ?? 'General Admission' }}</p>
                        </div>
                    </div>
                    <hr class="my-2">
                    <div class="row">
                        <div class="col-md-6">
                            <p class="mb-1"><strong>Phone:</strong></p>
                            <p class="text-muted">{{ $user->phone_number ?? 'Not provided' }}</p>
                        </div>
                        <div class="col-md-6">
                            <p class="mb-1"><strong>Registration ID:</strong></p>
                            <p class="text-muted">UP-{{ str_pad($user->id, 6, '0', STR_PAD_LEFT) }}</p>
                        </div>
                    </div>
                </div>

                <!-- Verification Status -->
                <div class="mb-4">
                    @if($attended)
                        <div class="alert alert-success d-flex align-items-center">
                            <i class="bi bi-check-circle-fill me-2"></i>
                            <div>
                                <strong>Checked In</strong><br>
                                {{ $attended }} via QR scan
                            </div>
                        </div>
                    @elseif($user->payment_status === 'Approved')
                        <div class="security-alert p-3 mb-3">
                            <h6 class="d-flex align-items-center">
                                <i class="bi bi-shield-exclamation me-2"></i>
                                Verification Protocol
                            </h6>
                            <ul class="mb-0 ps-3">
                                <li>Verify QR code scan timestamp</li>
                                <li>Check for duplicate entries</li>
                            </ul>
                        </div>
                    @else
                        <div class="alert alert-danger d-flex align-items-center">
                            <i class="bi bi-exclamation-triangle-fill me-2"></i>
                            <div>
                                <strong>Not Approved for Entry</strong><br>
                                Payment status: {{ $user->payment_status }}
                            </div>
                        </div>
                    @endif
                </div>

                <!-- Footer -->
                <div class="text-center text-muted small mt-4">
                    <p class="mb-1">Uprise City Conference Staff Portal</p>
                    <p class="mb-0">{{ now()->format('l, F j, Y \a\t g:i A') }}</p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

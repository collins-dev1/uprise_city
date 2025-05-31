<!DOCTYPE html>
<html>
<head>
    <title>Global Wealth Conference Access</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <!-- Static Logo -->
    <div style="text-align:center; margin-bottom: 20px;">
        <img src="{{ $message->embed(public_path('uprise_city/upriseimg/uprisecitylogo.png')) }}"
             alt="Uprise City Logo" style="max-width: 200px; ">
    </div>

    <h1 style="text-align: center">Hello {{ $user->full_name }},</h1>
    <p style="text-align: center">Your registration has been approved!</p>

    <!-- QR Code -->
    <div style="text-align: center; margin: 20px 0;">
        <p>Please present this QR code at the conference:</p>
        <img src="{{ $message->embed($qrCodePath) }}"
             alt="Registration QR Code" width="200px" height="200px">
    </div>
    <!-- Add this below the QR code in resources/views/emails/uprise_city.blade.php -->
<div style="margin: 25px 0; font-family: Arial, sans-serif;">
    <h3 style="color: #d9534f;">⚠️ Important Instructions:</h3>
    <ol style="line-height: 1.6; padding-left: 20px;">
        <li><strong>DO NOT scan this QR code before arriving at the conference venue.</strong></li>
        <li>This code is <strong>valid for one-time use only</strong> at the registration desk.</li>
        <li>If scanned prematurely, your access will be <strong>automatically revoked</strong>.</li>
        <li>Present the QR code <strong>on your phone</strong> or <strong>printed copy</strong> to staff.</li>
        <li>For security, <strong>do not share</strong> this code with anyone.</li>
    </ol>
    <p style="background: #f8f9fa; padding: 10px; border-left: 4px solid #d9534f;">
        <strong>Note:</strong> Early scanning will flag your registration as "used" and deny entry.
    </p>
</div>

    <p>Thank you,<br>The Uprise City Team</p>
</body>
</html>

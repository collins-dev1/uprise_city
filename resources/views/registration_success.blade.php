<!DOCTYPE html>
<html>
<head>
    <title>Registration Successful</title>
    @include('sweetalert::alert')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Open payment method in new tab
            const paymentUrl = "{{ route('payment_method') }}";
            window.open(paymentUrl, '_blank');
        });
    </script>
    <link rel="icon" href="{{ asset('uprise_city/upriseimg/uprise.jpg') }}" sizes="32x32" />
    <link rel="icon" href="{{ asset('uprise_city/upriseimg/uprise.jpg') }}" sizes="192x192" />
    <link rel="apple-touch-icon" href="{{ asset('uprise_city/upriseimg/uprise.jpg') }}" />
</head>
<body>
    <div style="text-align: center; padding: 50px;">
        <div style="text-align: center; padding: 30px; max-width: 800px; margin: 0 auto; font-family: Arial, sans-serif;">
    <div style="margin-bottom: 30px;">
        <svg style="width: 60px; height: 60px; color: #4CAF50;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
        </svg>
        <h2 style="color: #2E7D32; margin-top: 15px;">Registration Successfully Received!</h2>
    </div>

    <div style="background-color: #F5F5F5; padding: 20px; border-radius: 8px; margin-bottom: 25px; text-align: left;">
        <div style="display: flex; align-items: center; margin-bottom: 15px;">
            <div style="width: 24px; height: 24px; background-color: #2196F3; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 10px;">
                <svg style="width: 14px; height: 14px; color: white;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <p style="margin: 0; font-weight: bold;">Your registration is being processed</p>
        </div>

        <div style="display: flex; align-items: center; margin-bottom: 15px;">
            <div style="width: 24px; height: 24px; background-color: #2196F3; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 10px;">
                <svg style="width: 14px; height: 14px; color: white;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
            </div>
            <p style="margin: 0;">Registration details successfully submitted</p>
        </div>

        <div style="display: flex; align-items: center;">
            <div style="width: 24px; height: 24px; background-color: #FFC107; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 10px;">
                <svg style="width: 14px; height: 14px; color: white;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <p style="margin: 0;">Awaiting payment for final approval to be sent a QR scan code to your Registration email address for gaining access to the conference</p>
        </div>
    </div>

    <div style="margin: 30px 0;">
        <h3 style="color: #1976D2; margin-bottom: 15px;">Next Steps</h3>
        <p style="margin-bottom: 20px;">To complete your registration and secure your spot at the conference, please make your payment now.</p>

        <a href="{{ route('payment_method') }}"
           style="background-color: #1976D2;
                  color: white;
                  padding: 12px 24px;
                  border-radius: 4px;
                  text-decoration: none;
                  font-weight: bold;
                  display: inline-block;
                  transition: background-color 0.3s;"
           onmouseover="this.style.backgroundColor='#1565C0'"
           onmouseout="this.style.backgroundColor='#1976D2'" target="_blank">
            Proceed to Payment
        </a>
    </div>

    <div style="margin-top: 30px; color: #757575; font-size: 14px;">
        <p>Having trouble? Contact us at <a href="mailto:uprisecitynig@gmail.com" style="color: #1976D2;">support@uprisecity.com</a></p>
    </div>
</div>


    </div>
</body>
</html>

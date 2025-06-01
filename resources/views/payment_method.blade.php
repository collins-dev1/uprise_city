<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Information</title>
    <link rel="icon" href="{{ asset('uprise_city/upriseimg/uprise.jpg') }}" sizes="32x32" />
    <link rel="icon" href="{{ asset('uprise_city/upriseimg/uprise.jpg') }}" sizes="192x192" />
    <link rel="apple-touch-icon" href="{{ asset('uprise_city/upriseimg/uprise.jpg') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* CSS Styles */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
        }

        body {
            background-color: #f5f5f5;
            color: #333;
            line-height: 1.6;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 20px;
        }

        .bank-details {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 30px;
            border-left: 4px solid #3498db;
        }

        .bank-details h2 {
            color: #3498db;
            margin-bottom: 15px;
            font-size: 1.3rem;
        }

        .detail-item {
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }

        .detail-label {
            font-weight: bold;
            width: 120px;
            color: #555;
        }

        .detail-value {
            flex: 1;
        }

        .copy-icon {
            margin-left: 10px;
            color: #3498db;
            cursor: pointer;
            font-size: 16px;
            transition: color 0.3s;
        }

        .copy-icon:hover {
            color: #2980b9;
        }

        .copy-notification {
            position: fixed;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            background-color: #2ecc71;
            color: white;
            padding: 10px 20px;
            border-radius: 4px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            z-index: 1000;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .copy-notification.show {
            opacity: 1;
        }

        .payment-form {
            margin-top: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }

        input[type="text"],
        input[type="email"],
        input[type="file"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }

        .btn {
            display: inline-block;
            background-color: #3498db;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            text-decoration: none;
            text-align: center;
            transition: background-color 0.3s;
            width: 100%;
            margin-top: 10px;
        }

        .btn:hover {
            background-color: #2980b9;
        }

        .btn-whatsapp {
            background-color: #25D366;
        }

        .btn-whatsapp:hover {
            background-color: #1da851;
        }

        .btn-secondary {
            background-color: #6c757d;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
        }

        .instructions {
            margin-top: 30px;
            padding: 15px;
            background-color: #fffde7;
            border-left: 4px solid #ffd600;
            font-size: 14px;
        }

        .instructions h3 {
            margin-bottom: 10px;
            color: #ff8f00;
        }

        .hidden {
            display: none;
        }

        .preview-container {
            margin: 15px 0;
            text-align: center;
        }

        .preview-image {
            max-width: 100%;
            max-height: 200px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .file-info {
            margin-top: 5px;
            font-size: 14px;
            color: #666;
        }

        .confirmation-message {
            padding: 15px;
            background-color: #e8f5e9;
            border-left: 4px solid #4caf50;
            margin-bottom: 20px;
            display: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <div>
            <a href="{{url('/')}}">
            <img src="{{asset('uprise_city/upriseimg/uprisecitylogo.png')}}" alt=""></a>
        </div>
        <h1>Payment Information</h1>

        <div class="bank-details">
            <h2>Company Bank Details</h2>
            <div class="detail-item">
                <div class="detail-label">Bank Name:</div>
                <div class="detail-value" id="bankName">GTBank</div>
                <i class="fas fa-copy copy-icon" onclick="copyToClipboard('bankName')"></i>
            </div>
            <div class="detail-item">
                <div class="detail-label">Account Name:</div>
                <div class="detail-value" id="accountName">Uprise City Integrated Res. Ltd</div>
                <i class="fas fa-copy copy-icon" onclick="copyToClipboard('accountName')"></i>
            </div>
            <div class="detail-item">
                <div class="detail-label">Account Number:</div>
                <div class="detail-value" id="accountNumber">0226556517</div>
                <i class="fas fa-copy copy-icon" onclick="copyToClipboard('accountNumber')"></i>
            </div>
        </div>

        <div class="instructions">
            <h3>Payment Instructions</h3>
            <p>Please make your payment to the account details above. After payment, fill the form below and upload your
                payment proof.</p>
                <br>
            <p>Click the <i class="fas fa-copy"></i> icon next to each detail to copy it to your clipboard.</p>
            <br>
            <p>Please enter the name and email you used during registration. This will help us verify your payment and
                approve your attendance. Once verified, a QR scan code will be sent to your registration email. Present
                this code at the venue to gain access to the conference.</p>
        </div>

        <div class="payment-form">
            <form id="paymentForm">
                <div class="form-group">
                    <label for="name">Your Registration Full Name</label>
                    <input type="text" id="name" name="name" required placeholder="Enter your full name">
                </div>
                <div class="form-group">
                    <label for="email">Your Registration Email Address</label>
                    <input type="email" id="email" name="email" required placeholder="Enter your email address">
                </div>

                <button type="submit" class="btn">Submit Payment Details</button>
            </form>

            <div class="confirmation-message" id="confirmationMessage">
                <p><i class="fas fa-check-circle"></i> Your payment details have been submitted. Please send the proof
                    via WhatsApp.</p>
            </div>

            <div id="whatsappSection" class="hidden">
                <button id="sendWhatsAppBtn" class="btn btn-whatsapp">
                    <i class="fab fa-whatsapp"></i> Send Proof of Payment via WhatsApp
                </button>
                <button id="cancelBtn" class="btn btn-secondary mt-2">
                    <i class="fas fa-times"></i> Cancel and Edit Details
                </button>
            </div>
        </div>
    </div>

    <div class="copy-notification" id="copyNotification">
        Copied to clipboard!
    </div>

    <script>
        // JavaScript functionality
        document.addEventListener('DOMContentLoaded', function() {
            // Bank details
            const bankDetails = {
                bankName: "GTBank",
                accountName: "Uprise City Integrated Res. Ltd",
                accountNumber: "0226556517"
            };

            // Set the bank details on the page
            document.getElementById('bankName').textContent = bankDetails.bankName;
            document.getElementById('accountName').textContent = bankDetails.accountName;
            document.getElementById('accountNumber').textContent = bankDetails.accountNumber;

            // File upload preview
            // const paymentProofInput = document.getElementById('paymentProof');
            // const previewContainer = document.getElementById('previewContainer');
            // const imagePreview = document.getElementById('imagePreview');
            // const fileInfo = document.getElementById('fileInfo');

            // paymentProofInput.addEventListener('change', function() {
            //     const file = this.files[0];
            //     if (file) {
            //         previewContainer.classList.remove('hidden');
            //         fileInfo.textContent = `File: ${file.name} (${formatFileSize(file.size)})`;

            //         if (file.type.startsWith('image/')) {
            //             const reader = new FileReader();
            //             reader.onload = function(e) {
            //                 imagePreview.src = e.target.result;
            //                 imagePreview.classList.remove('hidden');
            //             }
            //             reader.readAsDataURL(file);
            //         } else {
            //             imagePreview.classList.add('hidden');
            //         }
            //     } else {
            //         previewContainer.classList.add('hidden');
            //     }
            // });

            // Form submission handler
            const paymentForm = document.getElementById('paymentForm');
            const confirmationMessage = document.getElementById('confirmationMessage');
            const whatsappSection = document.getElementById('whatsappSection');
            const sendWhatsAppBtn = document.getElementById('sendWhatsAppBtn');
            const cancelBtn = document.getElementById('cancelBtn');

            paymentForm.addEventListener('submit', function(e) {
                e.preventDefault();

                // Get form values
                const name = document.getElementById('name').value;
                const email = document.getElementById('email').value;

                // Store values for WhatsApp
                window.paymentData = {
                    name,
                    email,
                };

                // Show confirmation and WhatsApp button
                confirmationMessage.style.display = 'block';
                whatsappSection.classList.remove('hidden');
                paymentForm.classList.add('hidden');

                // Scroll to the confirmation
                confirmationMessage.scrollIntoView({
                    behavior: 'smooth'
                });
            });

            // WhatsApp button handler
            sendWhatsAppBtn.addEventListener('click', function() {
                const paymentData = window.paymentData;
                if (!paymentData) return;

                // WhatsApp phone number (replace with your company's WhatsApp number)
                const whatsappNumber = "2348085233053";

                // Create the WhatsApp message
                const message = `Hello, I just made a payment.\n\n` +
                    `*My Details:*\n` +
                    `Name: ${paymentData.name}\n` +
                    `Email: ${paymentData.email}\n\n` +
                    `*Payment Details:*\n` +
                    `Bank: ${bankDetails.bankName}\n` +
                    `Account Name: ${bankDetails.accountName}\n` +
                    `Account Number: ${bankDetails.accountNumber}\n\n` +
                    `I will send my proof of payment right now.`;

                // Encode the message for URL
                const encodedMessage = encodeURIComponent(message);

                // Create WhatsApp link
                const whatsappLink = `https://wa.me/${whatsappNumber}?text=${encodedMessage}`;

                // Open WhatsApp in a new tab
                window.open(whatsappLink, '_blank');

                // After 3 seconds, reload and redirect to homepage
                setTimeout(() => {
                    window.location.href = "/"; // Redirect to homepage
                    window.location.reload(); // Force reload
                }, 3000);
            });

            // Cancel button handler
            cancelBtn.addEventListener('click', function() {
                confirmationMessage.style.display = 'none';
                whatsappSection.classList.add('hidden');
                paymentForm.classList.remove('hidden');
            });
        });

        // Helper function to format file size
        function formatFileSize(bytes) {
            if (bytes === 0) return '0 Bytes';
            const k = 1024;
            const sizes = ['Bytes', 'KB', 'MB', 'GB'];
            const i = Math.floor(Math.log(bytes) / Math.log(k));
            return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + ' ' + sizes[i];
        }

        // Copy to clipboard function
        function copyToClipboard(elementId) {
            const element = document.getElementById(elementId);
            const textToCopy = element.textContent;

            // Create a temporary textarea element to copy from
            const tempTextArea = document.createElement('textarea');
            tempTextArea.value = textToCopy;
            document.body.appendChild(tempTextArea);

            // Select and copy the text
            tempTextArea.select();
            document.execCommand('copy');

            // Remove the temporary element
            document.body.removeChild(tempTextArea);

            // Show notification
            const notification = document.getElementById('copyNotification');
            notification.classList.add('show');

            // Hide notification after 2 seconds
            setTimeout(() => {
                notification.classList.remove('show');
            }, 2000);
        }
    </script>
</body>

</html>

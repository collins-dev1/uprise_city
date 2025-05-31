<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Your Company</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #2563eb;
            --primary-dark: #1d4ed8;
            --text-color: #1f2937;
            --text-light: #6b7280;
            --border-color: #e5e7eb;
            --light-bg: #f9fafb;
            --error-color: #dc2626;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
        }

        body {
            background-color: var(--light-bg);
            color: var(--text-color);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            line-height: 1.5;
        }

        .login-container {
            width: 100%;
            max-width: 420px;
            padding: 2rem;
            margin: 1rem;
        }

        .login-card {
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            padding: 2.5rem;
            text-align: center;
        }

        .logo {
            margin-bottom: 1.5rem;
        }

        .logo img {
            height: 100px;
        }

        .login-header {
            margin-bottom: 2rem;
        }

        .login-header h1 {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: var(--text-color);
        }

        .login-header p {
            color: var(--text-light);
            font-size: 0.875rem;
        }

        .login-form {
            display: flex;
            flex-direction: column;
            gap: 1.25rem;
        }

        .form-group {
            text-align: left;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-size: 0.875rem;
            font-weight: 500;
            color: var(--text-color);
        }

        .input-group {
            position: relative;
        }

        .form-control {
            width: 100%;
            padding: 0.75rem 1rem;
            padding-left: 2.5rem;
            border: 1px solid var(--border-color);
            border-radius: 8px;
            font-size: 0.875rem;
            transition: all 0.2s;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
        }

        .input-icon {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-light);
            font-size: 1rem;
        }

        .btn {
            width: 100%;
            padding: 0.75rem;
            background-color: var(--primary-color);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 0.875rem;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.2s;
        }

        .btn:hover {
            background-color: var(--primary-dark);
        }

        .btn:focus {
            outline: none;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.3);
        }

        .form-footer {
            margin-top: 1.5rem;
            font-size: 0.875rem;
            color: var(--text-light);
        }

        .form-footer a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
        }

        .form-footer a:hover {
            text-decoration: underline;
        }

        .divider {
            display: flex;
            align-items: center;
            margin: 1.5rem 0;
            color: var(--text-light);
            font-size: 0.75rem;
        }

        .divider::before,
        .divider::after {
            content: "";
            flex: 1;
            border-bottom: 1px solid var(--border-color);
        }

        .divider::before {
            margin-right: 1rem;
        }

        .divider::after {
            margin-left: 1rem;
        }

        .social-login {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
        }

        .social-btn {
            flex: 1;
            padding: 0.5rem;
            border: 1px solid var(--border-color);
            border-radius: 8px;
            background-color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.2s;
        }

        .social-btn:hover {
            background-color: var(--light-bg);
        }

        .social-btn img {
            height: 20px;
        }

        .error-message {
            color: var(--error-color);
            font-size: 0.75rem;
            margin-top: 0.25rem;
            text-align: left;
            display: none;
        }

        .form-control.error {
            border-color: var(--error-color);
        }

        .form-control.error:focus {
            box-shadow: 0 0 0 3px rgba(220, 38, 38, 0.1);
        }

        @media (max-width: 480px) {
            .login-card {
                padding: 1.5rem;
            }

            .social-login {
                flex-direction: column;
            }
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="login-card">
            <div class="logo">
                <!-- Replace with your logo -->
                <img src="{{ asset('uprise_city/upriseimg/uprisecitylogo.png') }}" alt="Company Logo">
            </div>

            <div class="login-header">
                <h1>Welcome back</h1>
                <p>Please enter your credentials to access your account</p>
            </div>

            <form class="login-form" id="loginForm" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <div class="input-group">
                        <i class="fas fa-envelope input-icon"></i>
                        <input id="email" type="email" id="email"
                            class="form-control @error('email') is-invalid @enderror" placeholder="you@example.com"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="error-message" id="emailError">Please enter a valid email address</div>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <div class="input-group">
                        <i class="fas fa-lock input-icon"></i>
                        <input id="password" type="password" id="password" placeholder="••••••••"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="error-message" id="passwordError">Password must be at least 8 characters</div>
                </div>

                <div class="form-group" style="text-align: right;">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" style="font-size: 0.75rem;">Forgot password?</a>
                    @endif

                </div>

                <button type="submit" class="btn">Sign In</button>
            </form>
        </div>
    </div>
</body>

</html>

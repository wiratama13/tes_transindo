<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <!-- Bootstrap CSS -->
    @include('includes.style_auth')
</head>
<body>

  <div class="login-container">
    <div class="login-form">
      <h2>Login</h2>
      <form method="POST" action="{{ route('login') }}">
       @csrf
        <!-- Email input -->
        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input type="email" class="form-control" id="email" name="email" required autofocus>
        </div>

        <!-- Password input -->
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password" required>
        </div>

        <!-- Remember Me checkbox -->
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="remember" name="remember">
          <label class="form-check-label" for="remember">Remember me</label>
        </div>

        <!-- Submit button -->
        <button type="submit" class="btn btn-primary w-100">Login</button>

        <!-- Register link -->
        <div class="mt-3 text-center">
          <p>Don't have an account? <a href="{{ route('show-register') }}">Register here</a>.</p>
        </div>
      </form>
    </div>
  </div>

 @include('includes.script_auth')
</body>
</html>

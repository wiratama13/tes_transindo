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
      <form method="POST" action="{{ route('register') }}">
        @csrf

         <!-- Name input -->
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="name" class="form-control" id="name" name="name" required autofocus>
        </div>

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
        
        <div class="mb-3">
          <label for="password-confir" class="form-label">Password confirmation</label>
          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
        </div>

        <!-- Submit button -->
        <button type="submit" class="btn btn-primary w-100">Login</button>

        <!-- Register link -->
        <div class="mt-3 text-center">
          <p>Have an account? <a href="{{ route('show-login') }}">Login here</a>.</p>
        </div>
      </form>
    </div>
  </div>

 @include('includes.script_auth')
</body>
</html>

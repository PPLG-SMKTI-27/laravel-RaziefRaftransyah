<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>

  <div class="login-container">
    <div class="login-header">
      <h1>Login</h1>
      <p>Masuk untuk melanjutkan</p>
    </div>

    {{-- Pesan error --}}
    @if(session('error'))
      <p style="color:red; text-align:center;">
        {{ session('error') }}
      </p>
    @endif

    <form action="/login" method="post">
      @csrf

      <div class="form-group">
        <label>Email</label>
        <input 
          type="email"
          name="email"
          value="{{ old('email') }}"
          placeholder="email@example.com"
          required
        >
      </div>

      <div class="form-group">
        <label>Password</label>
        <input 
          type="password"
          name="password"
          placeholder="********"
          required
        >
      </div>

      <button class="login-btn" type="submit">Masuk</button>
    </form>
  </div>

</body>
</html>

@extends('layout.main')

@section('title','Login')

@push('style')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
<link rel="stylesheet" href="{{ asset('css/popup.css') }}">
@endpush

@section('content')
<div class="login-page">
  <div class="login-wrapper">
    

    <div class="login-card">
      @if(session('success'))
            <div class="popup success">{{ session('success') }}</div>
      @endif
      @if(session('error'))
            <div class="popup error">{{ session('error') }}</div>
      @endif
        <h1>Login</h1>

        <form method="POST" action="/login">
            @csrf

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" required>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" required>
            </div>

            <button class="btn btn-full">Login</button>
        </form>

        <a href="/">← Kembali ke Portfolio</a>
    </div>
  </div>
</div>

<script>
    setTimeout(() => {
        const popup = document.querySelector('.popup');
        if (popup) {
            popup.style.opacity = '0';
            popup.style.transform = 'translateY(-10px)';
        }
    }, 3000);
</script>

@endsection

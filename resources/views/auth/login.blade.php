@extends('app')

@section('title')
    Masuk..
@endsection

@section('content')
    <div class="d-flex flex-column align-items-center justify-content-end login" style="height: 600px;">
        <div class="p-4">
            <div class="logo">
                <a href="#">
                    <span style="color: #22a2c2; font-size : 45px;">
                        <i class="fa-solid fa-user-group fa-xs"></i>
                        Mitra-KU
                    </span>
                </a> 
            </div>
        </div>
        <div class="p-2">
        @guest
            @if (Route::has('login'))
            <form method="POST" action="{{ route('login') }}">
            @csrf

                <div class="mb-3">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Alamat Email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                       
                <div class="mb-3">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Kata Sandi">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                        
                <div class="mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Ingat Saya') }}
                        </label>
                    </div>
                </div>
                
                <div class="mb-2">
                    <button type="submit" class="btn btn-primary" style="width: 250px;">
                        {{ __('Masuk') }}
                    </button>
                </div>

                <div class="text-center mb-3">
                    @if (Route::has('password.request'))
                        <a class="btn btn-link lupa" href="{{ route('password.request') }}">
                            {{ __('Lupa Kata Sandi?') }}
                        </a>
                    @endif
                </div>
            </form>
            @endif
        </div>
            
        <div class="p-2">
            @if (Route::has('register'))    
                <a class="btn btn-outline-dark" href="{{ route('register') }}" style="width: 250px;">Registrasi</a>
            @endif
        </div>
            @else
                <a class="btn btn-outline-dark" href="{{ ('beranda') }}" style="width: 250px;">Ke Beranda</a>  
        @endguest
    </div>
    
    <div class="d-flex flex-column align-items-center justify-content-end login-footer">
        <p style="font-size: 12px;">&copy; 2022 BPS Kabupaten Kayong Utara</p>
    </div>
@endsection

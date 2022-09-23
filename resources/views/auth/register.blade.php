@extends('app')

@section('title')
    Registrasi
@endsection

@section('content')
    <div class="d-flex flex-column align-items-center justify-content-end login" style="height: 660px;">
        <div class="p-2">
            <div class="logo">
                <a href="{{ route('register') }}">
                    <span style="color: #22a2c2; font-size : 45px;">
                        <i class="fa-solid fa-user-group fa-xs"></i>
                        Mitra-KU
                    </span>
                </a>
            </div>
        </div>

        <h6 class="text-center text-dark">Registrasi</h6>

        <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="p-2">
            <div class="mb-3">
                <input placeholder="Nama Lengkap" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <input placeholder="Kode Satker" type="text" class="form-control @error('kode_satker') is-invalid @enderror" name="kode_satker" value="{{ old('kode_satker') }}" required autocomplete="kode_satker" autofocus>

                @error('kode_satker')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <input placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <input placeholder="Kata Sandi" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="">
                <input placeholder="Masukkan Ulang Kata Sandi" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
        </div>

        <div class="p-2">
            <button type="submit" class="btn btn-outline-dark" style="width: 250px;">Registrasi</a>
        </div>
        
        </form>

        <div class="p-2 text-center">
            <span>Kembali Ke Halaman</span>
            <a href="{{ route('login') }}" style="width: 250px;">Masuk</a>
        </div>
    </div>   

    <div class="d-flex flex-column align-items-center justify-content-end login-footer">
        <p style="font-size: 12px;">&copy; 2022 BPS Kabupaten Kayong Utara</p>
    </div>    
@endsection

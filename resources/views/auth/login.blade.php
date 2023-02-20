@extends('layouts/fullLayoutMaster')

@section('title', 'เข้าสู่ระบบ')

@section('page-style')
    {{-- Page Css files --}}
    <link rel="stylesheet" href="{{ asset(mix('css/base/pages/authentication.css')) }}">
@endsection

@section('content')
    <div class="auth-wrapper auth-basic px-2">
        <div class="auth-inner my-2">
            <!-- Login basic -->
            <div class="card mb-0">
                <div class="card-body">
                    <a href="#" class="brand-logo">

                        <img src="{{ asset('images/logo/logo.png') }}" class="me-1" alt="Toast image" height="60" />


                    </a>

                    <h4 class="card-title mb-1">ยินดีต้อนรับสู่ Catflow! 👋</h4>
                    <p class="card-text mb-2">กรุณาเข้าสู่ระบบหรือสร้างบัญชีเพื่อเข้าใช้งานระบบของเรา</p>

                    @if (session('status'))
                        <div class="alert alert-success mb-1 rounded-0" role="alert">
                            <div class="alert-body">
                                {{ session('status') }}
                            </div>
                        </div>
                    @endif

                    <form class="auth-login-form mt-2" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-1">
                            <label for="login-email" class="form-label">อีเมล</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror" id="login-email"
                                name="email" placeholder="john@example.com" aria-describedby="login-email" tabindex="1"
                                autofocus value="{{ old('email') }}" />
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-1">
                            <div class="d-flex justify-content-between">
                                <label class="form-label" for="login-password">รหัสผ่าน</label>
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">
                                        <small>ลืมรหัสผ่าน?</small>
                                    </a>
                                @endif
                            </div>
                            <div class="input-group input-group-merge form-password-toggle">
                                <input type="password" class="form-control form-control-merge" id="login-password"
                                    name="password" tabindex="2"
                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                    aria-describedby="login-password" />
                                <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                            </div>
                        </div>
                        <div class="mb-1">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="remember" name="remember"
                                    tabindex="3" {{ old('remember') ? 'checked' : '' }} />
                                <label class="form-check-label" for="remember"> จดจำ </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary w-100" tabindex="4">เข้าสู่ระบบ</button>
                    </form>

                    <p class="text-center mt-2">
                        <span>พึ่งเคยใช้งานครั้งแรก?</span>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">
                                <span>กรุณาสมัครสมาชิกก่อน</span>
                            </a>
                        @endif
                    </p>




                </div>
            </div>
            <!-- /Login basic -->
        </div>
    </div>
@endsection

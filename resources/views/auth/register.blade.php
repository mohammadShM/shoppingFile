@extends('auth.master')
@section('content')
    <form action="{{route('register')}}" method="post" class="form">
        @csrf
        <a class="account-logo" href="index.html">
            <img src="{{asset('./assetsClient/img/Logo.png')}}" alt="">
        </a>
        <div class="form-content form-account">
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                       class="txt @error('name') is-invalid @enderror" placeholder="نام و نام خانوادگی *">
                @error('name')
                <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
                </span>
                @enderror
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email"
                       class="txt txt-l @error('email') is-invalid @enderror" placeholder="ایمیل *">
                @error('email')
                <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
                </span>
                @enderror
                <input id="mobile" type="text" name="mobile" value="{{ old('mobile') }}" autocomplete="mobile"
                       class="txt txt-l @error('mobile') is-invalid @enderror" placeholder="شماره موبایل">
                @error('mobile')
                <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
                </span>
                @enderror
                <input id="password" type="password" name="password" required autocomplete="new-password"
                       class="txt txt-l @error('password') is-invalid @enderror" placeholder="رمز عبور *">
                @error('password')
                <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
                </span>
                @enderror
                <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password"
                       class="txt txt-l @error('password_confirmation') is-invalid @enderror" placeholder="تکرار رمز عبور *">
                @error('password_confirmation')
                <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
                </span>
                @enderror
                <span class="rules">رمز عبور باید حداقل ۶ کاراکتر و ترکیبی از حروف بزرگ،
                حروف کوچک، اعداد و کاراکترهای غیر الفبا مانند !@#$%^&*() باشد.</span>
                <br>
                <button class="btn continue-btn">ثبت نام و ادامه</button>
        </div>
        <div class="form-footer">
            <a href="{{route('login')}}">صفحه ورود</a>
        </div>
    </form>
@endsection
